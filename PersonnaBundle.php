<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Viduc\PersonnaBundle\src\Controller\PersonnaController;

class PersonnaBundle extends Bundle
{
    public PersonnaController $personna;

    public function __construct()
    {
        $this->personna = new PersonnaController();
    }
}