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
$query = \Drupal::database()->select('search_log','search_log');
    $query->fields('search_log',['language'],['qid'],['counter'],['result']);
    $results = $query->execute()->fetchAll();

      return [
      '#type' => 'table',
      '#caption' => $this->t('search_log_list'),
      '#header' => [
        $this->t('qid'),
        $this->t('language'),
        $this->t('counter'),
        $this->t('result'),
      ],
      '#rows' => [
        'row1' =>[
         'data' => [
          '#content' => $this->t('hello world'),$this->t($resutl[0]->language),

        ],
        'row2' => [
          'data' => [
            '#content' => $this->t('second row'),$this->t('rahul')
          ],
        ],
      ]
    ],
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
