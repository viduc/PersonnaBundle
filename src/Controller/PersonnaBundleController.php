<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Viduc\Personna\Controller\Personna;
use Viduc\PersonnaBundle\Presenters\PersonnaPresenter;
use Viduc\PersonnaBundle\Requetes\PersonnaRequete;

class PersonnaBundleController extends AbstractController
{
    /**
     * @var Personna
     */
    private Personna $personna;

    /**
     * @var string
     */
    private string $path;

    /**
     * @param Personna|null $personna
     * @param string|null $path
     */
    public function __construct(Personna $personna = null, string $path = null)
    {
        $this->path = $path ?? str_replace(
            ['/Controller', '/src', '/personna-bundle', '/librairies', '/vendor'],
            '',
            __DIR__
        ) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'personnas';

        $this->personna = $personna ?? new Personna($this->path);
    }

    /**
     * @param Personna $personna
     */
    final public function setPersonna(Personna $personna): void
    {
        $this->personna = $personna;
    }

    /**
     * @param string $path
     */
    final public function setPath(string $path): void
    {
        $this->path = $path;
    }

    final public function recupererLesPersonnas(): array
    {
        $requete = new PersonnaRequete('getAll');
        $presenter = new PersonnaPresenter();
        return $this->personna->execute(
            $requete, $presenter
        )->getReponse()->getPersonnas();
    }
}