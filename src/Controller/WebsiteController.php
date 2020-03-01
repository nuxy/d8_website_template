<?php

/**
 * @file
 * Contains \Drupal\website\Controller\WebsiteController.
 */

namespace Drupal\website\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for website routes.
 */
class WebsiteController extends ControllerBase {

  /**
   * Creates a render array for the website content.
   *
   * @return array
   *   The build array.
   */
  public function view() {
    return array(
      '#theme' => 'website_content',
      '#node' => node_load(1),
      '#attached' => array(
        'library' => 'website/website',
      ),
    );
  }
}
