<?php

/**
 * @file
 * Contains \Drupal\website\Routing\WebsiteRouteSubscriber.
 */

namespace Drupal\website\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens for dynamic route events.
 */
class WebsiteRouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    if ($route = $collection->get('user.pass')) {
      $route->setRequirement('_access', 'FALSE');
    }
  }
}
