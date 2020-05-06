<?php

namespace Drupal\module_hero\Controller;

/**
* This is our hero controller
*/

class HeroController {

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
      '#markup' => '<ol>'.$ourHeros.'</ol>',
    ];

  }

}
