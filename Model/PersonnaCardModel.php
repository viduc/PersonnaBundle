<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/

namespace Viduc\PersonnaBundle\Model;

use Viduc\Personna\Model\PersonnaModel;

class PersonnaCardModel
{
    public string $prenom;
    public string $nom;
    public string $urlPhoto;
    public string $metier;

    /**
     * @param PersonnaModel $personna
     */
    final public function __construct(PersonnaModel $personna)
    {
        $this->prenom = $personna->getPrenom();
        $this->nom = $personna->getNom();
        $this->urlPhoto = $personna->getUrlPhoto();
        $this->metier = $personna->getMetier();
    }
}