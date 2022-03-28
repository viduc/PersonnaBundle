<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

use PHPUnit\Framework\TestCase;
use Viduc\PersonnaBundle\Exceptions\PersonnaException;
use Viduc\PersonnaBundle\Requetes\PersonnaRequete;

class PersonnaRequeteTest extends TestCase
{
    private PersonnaRequete $requete;

    final public function setUp(): void
    {
        parent::setUp();
        $this->requete = new PersonnaRequete('test', ['test' => 'test']);
    }

    /**
     * @test
     * @return void
     */
    final public function getAction(): void
    {
        self::assertEquals('test', $this->requete->getAction());
        $this->requete->setAction('test2');
        self::assertEquals('test2', $this->requete->getAction());
    }

    /**
     * @test
     * @return void
     * @throws PersonnaException
     */
    final public function getParam(): void
    {
        self::assertEquals('test', $this->requete->getParam('test'));
        $this->requete->setParam(['test2' => 'test2']);
        self::assertEquals('test2', $this->requete->getParam('test2'));
        try {
            $this->requete->getParam('test');
        } catch (PersonnaException $ex) {
            self::assertEquals(
                "Le paramètre test n'existe pas",
                $ex->getMessage()
            );
            self::assertEquals(
                100,
                $ex->getCode()
            );
        }
    }
}