<?php

namespace Drupal\kriskan_footer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a KRIS-KAN Footer block.
 *
 * @Block(
 *   id = "kriskan_footer_block",
 *   admin_label = @Translation("KRIS-KAN Footer"),
 *   category = @Translation("Custom")
 * )
 */
class KriskanFooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'kriskan_footer_block',
      '#content' => [
        'company_name' => 'KRIS-KAN',
        'description' => 'Twoi specjaliści od instalacji wodno-kanalizacyjnych. Zaufaj profesjonalistom.',
        'phone' => '+48 572 855 440',
        'email' => 'kriskan.gniezno@gmail.com',
        'facebook_url' => 'https://www.facebook.com/people/Kris-Kan-us%C5%82ugi-wodno-kanalizacyjne/61574998886416/',
        'instagram_url' => 'https://instagram.com/kris_kan_gniezno',
        'links' => [
          [
            'url' => 'https://kris-kan.gniezno.pl/polityka-prywatnosci',
            'label' => 'Polityka Prywatności',
          ],
          [
            'url' => '/nasze-prace',
            'label' => 'Nasze projekty',
          ],
        ],
      ],
    ];
  }

} 