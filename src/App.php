<?php
namespace Boyonglab\Theresia\Core;

use Boyonglab\Theresia\Core\Http\Request;
use Boyonglab\Theresia\Core\Http\Router;
use Boyonglab\Theresia\Core\View\Renderer;
use Boyonglab\Theresia\Core\Config;

class App {
  public $request;
  public $router;
  public $config;
  public $renderer;

  public function __construct()
  {
      $this->request = new Request();
      $this->router = new Router($this->request);
      $this->renderer = new Renderer();
      $this->config = new Config();
  }

  public function view($path, $params=[]){
      return $this->renderer->html($path, $params);

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
