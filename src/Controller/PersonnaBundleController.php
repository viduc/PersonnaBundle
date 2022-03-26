<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace viduc\PersonnaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Viduc\Personna\Controller\Personna;

class PersonnaBundleController extends AbstractController
{
    private Personna $personna;

    public function __construct()
    {
        //$this->personna = new Personna();
    }

    public function test(): string
    {
        return 'test';
    }
}