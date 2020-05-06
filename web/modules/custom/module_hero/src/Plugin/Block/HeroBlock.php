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
    return array(
      '#type' => 'markup',
      '#markup' =>  $this->t('The output of our superheros block'),
    );
  }

}
