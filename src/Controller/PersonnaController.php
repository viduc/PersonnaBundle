<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\src\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonnaController extends AbstractController
{
    public function __construct()
    {

    }

    public function test(): string
    {
        return 'test';
    }
}