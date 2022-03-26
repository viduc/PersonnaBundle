<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace viduc\PersonnaBundle\Ports;

use viduc\personna\Interfaces\Ports\PortPersonnaDaoInterface;
use viduc\personna\Model\PersonnaModel;

class PortPersonnaDao implements PortPersonnaDaoInterface
{

    final public function create(array $ptions): PersonnaModel
    {
        return new PersonnaModel();
    }

    final public function read(int $id): PersonnaModel
    {
        return new PersonnaModel();
    }

    final public function update(PersonnaModel $personna): PersonnaModel
    {
        return $personna;
    }

    final public function delete(PersonnaModel $personna): void
    {

    }
}