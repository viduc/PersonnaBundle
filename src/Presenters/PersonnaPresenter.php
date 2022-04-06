<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\Presenters;

use Viduc\Personna\Interfaces\Presenters\PresenterInterface;
use Viduc\Personna\Interfaces\Reponses\ReponseInterface;

class PersonnaPresenter implements PresenterInterface
{
    private ReponseInterface $reponse;

    final public function presente(ReponseInterface $reponse): void
    {
        $this->reponse = $reponse;
    }

    /**
     * @codeCoverageIgnore
     * @return ReponseInterface
     */
    final public function getReponse(): ReponseInterface
    {
        return $this->reponse;
    }

    /**
     * @codeCoverageIgnore
     * @param ReponseInterface $reponse
     */
    final public function setReponse(ReponseInterface $reponse): void
    {
        $this->reponse = $reponse;
    }


}