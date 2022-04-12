<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Viduc\Personna\Controller\Personna;
use Viduc\Personna\Model\PersonnaModel;
use Viduc\PersonnaBundle\Model\PersonnaCardModel;
use Viduc\PersonnaBundle\Presenters\PersonnaPresenter;
use Viduc\PersonnaBundle\Requetes\PersonnaRequete;

class PersonnaController extends AbstractController
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

    final public function index(): Response
    {
        $personna = new PersonnaModel();
        $personna->setNom('TestNom1');
        $personna->setPrenom('TestPrenom1');
        $personna->setUrlPhoto('https://www.anne-et-paper.fr/app/uploads/2020/09/aurelien-cunin-300x277.png');
        $personna->setMetier('metier1');
        $autre = new PersonnaModel();
        $autre->setNom('TestNom12');
        $autre->setPrenom('TestPrenom2');
        $autre->setUrlPhoto('https://www.kreezalid.com/uploads/blog/author/2/afe15b3a510740cc3bb7ddcf0b04bbfc.jpg');
        $autre->setMetier('metier2');
        $personnas[] = new PersonnaCardModel($personna);
        $personnas[] = new PersonnaCardModel($autre);
        return $this->render('@Personna/personnas.html.twig', [
            'personnas' => $personnas
        ]);
    }

    final public function recupererLesPersonnas(): array
    {
        $requete = new PersonnaRequete('getAll');
        $presenter = new PersonnaPresenter();
        return $this->personna->execute(
            $requete, $presenter
        )->getReponse()->getPersonnas();
    }

    final public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}