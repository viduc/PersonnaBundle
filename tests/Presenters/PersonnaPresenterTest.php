<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\Tests\Presenters;

use PHPUnit\Framework\TestCase;
use Viduc\PersonnaBundle\Presenters\PersonnaPresenter;
use Viduc\PersonnaBundle\Tests\Ressources\Reponse;

class PersonnaPresenterTest extends TestCase
{
    private PersonnaPresenter $presenter;

    final public function setUp(): void
    {
        parent::setUp();
        $this->presenter = new PersonnaPresenter();
    }

    /**
     * @test
     * @return void
     */
    final public function presente(): void
    {
        self::assertNull($this->presenter->presente(new Reponse()));
    }
}