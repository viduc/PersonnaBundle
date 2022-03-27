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
use Viduc\PersonnaBundle\Ports\PortPersonnaDao;

class PersonnaBundleController extends AbstractController
{
    private Personna $personna;

    public function __construct()
    {
        $this->personna = new Personna(new PortPersonnaDao());
    }

    public function test(): string
    {
        return 'test';
    }
}