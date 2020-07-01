<?php

namespace Drupal\payment_iamport\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Payment iamport routes.
 */
class PaymentIamportController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
