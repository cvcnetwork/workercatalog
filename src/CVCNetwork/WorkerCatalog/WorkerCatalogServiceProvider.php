<?php namespace CVCNetwork\WorkerCatalog;

use Illuminate\Support\ServiceProvider;
use CVCNetwork\Messaging\Event;

class WorkerCatalogServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot() {
    $this->package('cvcnetwork/workercatalog');

    //Register listeners via artisan
    \Event::listen('artisan.start', function () {

      //Find the configurations to use for this worker
      //The queue name in the CVCNetworkMessaging amqp file must match this
      Event::listen('WorkerCatalog', 'item.publish', 'CVCNetwork\WorkerCatalog');
    });
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register() {
    //
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides() {
    return array();
  }

}