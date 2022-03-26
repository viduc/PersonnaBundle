<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Ports;

use PHPUnit\Framework\TestCase;
use viduc\personna\Model\PersonnaModel;
use viduc\PersonnaBundle\Ports\PortPersonnaDao;

class PortPersonnaDaoTest extends TestCase
{
    private PortPersonnaDao $port;
    private array $tabOptions;

    final public function setUp(): void
    {
        parent::setUp();
        $this->port = new PortPersonnaDao();
        $this->tabOptions = [
            'username' => 'username',
            'prenom' => 'prenom',
            'nom' => 'nom',
            'age' => 0,
            'lieu' => 'lieu',
            'aisanceNumerique' => 0,
            'expertiseDomaine' => 0,
            'frequenceUsage' => 0,
            'metier' => 'metier',
            'citation' => 'citation',
            'histoire' => 'histoire',
            'buts' => 'buts',
            'personnalite' => 'personnalite',
            'urlPhoto' => 'urlphoto',
            'roles' => ['ROLE_USER'],
            'isActive' => true
        ];
    }

    /**
     * @test
     * @return void
     */
    final public function create(): void
    {
        $this->compareModelToTabOptions($this->port->create($this->tabOptions));
    }

    /**
     * @test
     * @return void
     */
    final public function read(): void
    {
        $this->compareModelToTabOptions($this->port->read(1));
    }

    /**
     * @test
     * @return void
     */
    final public function update(): void
    {
        $this->compareModelToTabOptions($this->port->update(new PersonnaModel()));
    }

    /**
     * @test
     * @return void
     */
    final public function delete(): void
    {
        self::assertNull($this->port->delete(new PersonnaModel()));
    }

    /**
     * @param PersonnaModel $model
     * @return void
     */
    private function compareModelToTabOptions(PersonnaModel $model): void
    {
        self::assertEquals($this->tabOptions['username'], $model->getUsername());
        self::assertEquals($this->tabOptions['prenom'], $model->getPrenom());
        self::assertEquals($this->tabOptions['nom'], $model->getNom());
        self::assertEquals($this->tabOptions['age'], $model->getAge());
        self::assertEquals($this->tabOptions['lieu'], $model->getLieu());
        self::assertEquals($this->tabOptions['aisanceNumerique'], $model->getAisanceNumerique());
        self::assertEquals($this->tabOptions['expertiseDomaine'], $model->getExpertiseDomaine());
        self::assertEquals($this->tabOptions['frequenceUsage'], $model->getFrequenceUsage());
        self::assertEquals($this->tabOptions['metier'], $model->getMetier());
        self::assertEquals($this->tabOptions['citation'], $model->getCitation());
        self::assertEquals($this->tabOptions['histoire'], $model->getHistoire());
        self::assertEquals($this->tabOptions['buts'], $model->getButs());
        self::assertEquals($this->tabOptions['personnalite'], $model->getPersonnalite());
        self::assertEquals($this->tabOptions['urlPhoto'], $model->getUrlPhoto());
        self::assertEquals($this->tabOptions['roles'], $model->getRoles());
        self::assertEquals($this->tabOptions['isActive'], $model->isActive());
    }
}