<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\Tests\Ressources;

use Viduc\Personna\Interfaces\Reponses\ReponseInterface;
use Viduc\Personna\Model\ErreurModel;

class Reponse implements ReponseInterface
{
    private ErreurModel $erreur;

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    final public function setErreur(ErreurModel $erreur): void
    {
        $this->erreur = $erreur;
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    final public function getErreur(): ErreurModel
    {
        return $this->erreur;
    }

}