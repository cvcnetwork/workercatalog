<?php namespace CVCNetwork\WorkerCatalog;

use CVCNetwork\Messaging\Workers\AbstractWorker;

class WorkerCatalog extends AbstractWorker {

  /**
   * @inheritDoc
   */
  public function work($queue, $topic, $data) {

    // Do some crazy stuff with the data
    syslog(LOG_LOCAL3, $topic);

  }

}
