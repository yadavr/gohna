<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called "Example hero" block.
 *
 * @Block(
 *   id = "module_hero_hero",
 *   admin_label = @Translation("Example Hero Block")
 * )
 */
class HeroBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $heroes = [
      ['name'=>'Hulk'],
      ['name'=>'Thor'],
      ['name'=>'Iron Man'],
      ['name'=>'Paranjay'],
      ['name'=>'Rajesh']
    ];

    $table = [
      '#type' => 'table',
      '#header' => [
        $this->t('Name'),
      ]
    ];

    foreach ($heroes as $value) {

      $table[] = [
        'name' => [
          '#type' => 'markup',
          '#markup' => $value['name'],
        ],
      ];

    }

    return $table;

    /*
    return array(
      '#type' => 'markup',
      '#markup' =>  $this->t('The output of our superheros block'),
    );
    */
  }

}
