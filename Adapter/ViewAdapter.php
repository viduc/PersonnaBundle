<?php
declare(strict_types=1);
/******************************************************************************/
/**                             PersonnaBundle                               **/
/** Auteur: viduc@mail.fr                                                    **/
/** github: https://github.com/viduc/personna-bundle                         **/
/** Licence: Apache 2.0                                                      **/
/******************************************************************************/
namespace Viduc\PersonnaBundle\Adapter;

use Viduc\PersonnaBundle\Interfaces\Model\ViewModelInterface;
use Viduc\PersonnaBundle\Model\PersonnaCardModel;
use Viduc\PersonnaBundle\Model\ViewModelPersonnas;

class ViewAdapter
{
    final public function createViewIndex(array $personnasModel): ViewModelInterface
    {
        $viewModel = new ViewModelPersonnas();
        foreach ($personnasModel as $personna) {
            $viewModel->addPersonna(new PersonnaCardModel($personna));
        }

        return $viewModel;
    }
}