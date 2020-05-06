<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;



/**
* This is our hero controller
*/

class HeroController extends ControllerBase {

  public function heroList() {

    $heros = [
      ['name'=>'Hulk'],
      ['name'=>'Thor'],
      ['name'=>'Iron Man'],
      ['name'=>'Paranjay'],
      ['name'=>'Rajesh']

    ];

    $ourHeros = '';
    foreach ($heros as $hero) {
      $ourHeros .= '<li>'. $hero['name']. '</li>';
    }

    return [
      '#type' => 'markup',
      '#markup' => '<h4>'.$this->t('These are our best heros'). '</h4><ol>'.$ourHeros.'</ol>',
    ];

  }

}
