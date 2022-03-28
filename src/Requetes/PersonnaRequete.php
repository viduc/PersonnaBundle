<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\Requetes;

use Viduc\PersonnaBundle\Exceptions\PersonnaException;
use Viduc\Personna\Interfaces\Requetes\RequeteInterface;

class PersonnaRequete implements RequeteInterface
{
    private string $action;
    private array $param;

    /**
     * @param string|null $action
     * @param array|null $param
     */
    public function __construct(string $action = null, array $param = null)
    {
        $this->action = 'action';
        if ($action !== null) {
            $this->action = $action;
        }
        $this->param = [];
        if ($param !== null) {
            $this->param = $param;
        }
    }

    /**
     * @param string $action
     * @return void
     */
    final public function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    final public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $param
     * @return mixed
     * @throws PersonnaException
     */
    final public function getParam(string $param): mixed
    {
        if (isset($this->param[$param])) {
            return $this->param[$param];
        }
        throw new PersonnaException(
            "Le paramètre " . $param ." n'existe pas",
            100
        );
    }

    /**
     * @param array $param
     * @return void
     */
    final public function setParam(array $param): void
    {
        $this->param = $param;
    }
}