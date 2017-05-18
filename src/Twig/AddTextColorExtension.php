<?php
namespace Drupal\hello_drupal\Twig;

/**
 * Class DefaultService.
 *
 * @package Drupal\hello_drupal
 */
class AddTextColorExtension extends \Twig_Extension {

  /**
   * {@inheritdoc}
   * This function must return the name of the extension. It must be unique.
   */
  public function getName() {
    return 'add_color';
  }

  /**
   * Generates a list of all Twig filters that this extension defines.
   */
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction(
        'addcolor',
        [$this, 'filterAddColor'],
        [
          'is_safe' => ['html'],
        ]
      ),
    ];
  }

  /**
   * Filter to return text with color.
   */
  public function filterAddColor($txt, $color) {
    return "<span style='color:$color'>$txt</span>";
    return '<span style="color: ' . $color . '">Whatever</span>';
  }

}
