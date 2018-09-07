<?php

namespace Drupal\search_log\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Search_log.
   *
   * @return string
   *   Return Hello string.
   */
  public function search_log() {

    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: search_log')
    ];
  }
  /**
   * Search_history.
   *
   * @return string
   *   Return Hello string.
   */
  public function search_history() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: search_history')
    ];
  }

}
