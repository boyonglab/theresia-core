<?php
namespace Boyonglab\Theresia\Core;

use Boyonglab\Theresia\Core\Http\Request;
use Boyonglab\Theresia\Core\Http\Router;

class App {
  public $request;
  public $router;

  public function __construct()
  {
      $this->request = new Request();
      $this->router = new Router($this->request);
  }

  public function run()
  {
      try {
        $this->router->run();
      } catch (\Exception $e) {
        if ($e->getMessage() == '404') {
          echo '404';
        }
      }
  }
}
