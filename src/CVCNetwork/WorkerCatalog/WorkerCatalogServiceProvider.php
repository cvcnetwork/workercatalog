<?php namespace Cvcnetwork\WorkerCatalog;

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
      //Use the same queue name as in amqp.php config
      Event::listen("node_notifications", "item.publish", "CVCNetwork\WorkerCatalog");
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