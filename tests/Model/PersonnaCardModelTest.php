<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\Tests\Model;

use PHPUnit\Framework\TestCase;
use Viduc\Personna\Model\PersonnaModel;
use Viduc\PersonnaBundle\Model\PersonnaCardModel;

class PersonnaCardModelTest extends TestCase
{
    private PersonnaCardModel $personna;

    final public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @return void
     * @test
     */
    final public function personna(): void
    {
        $personnaModel = new PersonnaModel();
        $personnaModel->setNom('test');
        $personnaModel->setPrenom('test');
        $personnaModel->setUrlPhoto('test');
        $personnaModel->setMetier('test');
        $this->personna = new PersonnaCardModel($personnaModel);
        self::assertEquals('test', $this->personna->metier);
        self::assertEquals('test', $this->personna->prenom);
        self::assertEquals('test', $this->personna->nom);
        self::assertEquals('test', $this->personna->urlPhoto);
    }
}