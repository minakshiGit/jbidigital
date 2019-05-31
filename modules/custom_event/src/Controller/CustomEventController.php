<?php

namespace Drupal\custom_event\Controller;

/**
 * Defines a controller to render a simple page.
 */
class CustomEventController {

  /**
   * Build page output.
   *
   * @return array
   *   A renderable array.
   */
  public function page() {
    return array(
      '#markup' => "This is a event page",
    );
  }

  /**
   * Page title callback.
   *
   * @return string
   *  The title of the page.
   */
  public function title() {
    return "Event page";
  }

}
