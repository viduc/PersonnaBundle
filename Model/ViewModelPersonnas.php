<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/
namespace Viduc\PersonnaBundle\Model;

use Viduc\PersonnaBundle\Interfaces\Model\ViewModelInterface;

class ViewModelPersonnas implements ViewModelInterface
{
    /**
     * @var PersonnaCardModel[]
     */
    public array $personnas = [];

    final public function addPersonna(PersonnaCardModel $model): void
    {
        $this->personnas[] = $model;
    }
}