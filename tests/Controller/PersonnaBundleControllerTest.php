<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/
namespace Viduc\PersonnaBundle\Tests\Controller;

use PHPUnit\Framework\TestCase;
use Viduc\Personna\Controller\Personna;
use Viduc\Personna\Interfaces\Presenters\PresenterInterface;
use Viduc\Personna\Reponses\Reponse;
use Viduc\Personna\Reponses\ReponsePersonna;
use Viduc\PersonnaBundle\Controller\PersonnaBundleController;

class PersonnaBundleControllerTest extends TestCase
{
    private PersonnaBundleController $controller;
    private Personna $personna;
    private PresenterInterface $presenter;

    final public function setUp(): void
    {
        parent::setUp();
        $this->presenter = $this->createMock(PresenterInterface::class);
        $this->personna = $this->createMock(Personna::class);
        $this->personna->method('execute')->willReturn($this->presenter);
        $this->controller = new PersonnaBundleController($this->personna);
    }

    /**
     * @test
     * @return void
     */
    final public function recupererLesPersonnas(): void
    {
        $reponse = $this->createMock(ReponsePersonna::class);
        $reponse->method('getPersonnas')->willReturn([]);
        $this->presenter->method('getReponse')->willReturn($reponse);
        self::assertIsArray($this->controller->recupererLesPersonnas());
    }
}