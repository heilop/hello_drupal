<?php
namespace Drupal\hello_drupal\Twig;


class RemoveNumbersExtension extends \Twig_Extension {

  /**
   * Generates a list of all Twig filters that this extension defines.
   */
  public function getFilters() {
    return [
      //new \Twig_SimpleFilter('removenum', array($this, 'removeNumbers')),
      new \Twig_SimpleFilter('removenum', [$this, 'removeNumbers'], ['is_safe' => ['html']]),
    ];
  }

  /**
   * Gets a unique identifier for this Twig extension.
   */
  public function getName() {
    return 'hello_drupal_filters';
  }

  /**
   * Replaces all numbers from the string.
   */
  public static function removeNumbers($string) {
    return preg_replace('#[0-9]*#', '', $string);
  }

}
