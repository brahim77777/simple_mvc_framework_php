<?php
namespace App;

class Router
{
	// routes[GET]['/'] = ['controller'=>'Main', 'action'=>'show']

	public $routes = [];

	public function addRoute($method, $uri, $controller, $controller_method)
	{

		$this->routes[$method][$uri] = [
			'controller' => $controller,
			'controller_method' => $controller_method,
		];

	}

	public function get($uri, $controller, $controller_method)
	{
		$this->addRoute("GET", $uri, $controller, $controller_method);
	}

	public function post($uri, $controller, $controller_method)
	{
		$this->addRoute("POST", $uri, $controller, $controller_method);
	}

	public function dispatch()
	{
		// this method takes the uri
		// then check if uri is registered in the routes
		// check if $this->routes[request_method, uri] deos exist ?
		// if so then we have to run the controller_method
		// if not return an 404 not found
		//
		$uri = strtok($_SERVER['REQUEST_URI'], "?");

		$method = $_SERVER['REQUEST_METHOD'];
		echo "<pre>";
		print_r($this->routes[$method][$uri]);
		echo "</pre>";
		if (isset($this->routes[$method][$uri])) {
			$controller_name = $this->routes[$method][$uri]['controller'];
			$controller = new $controller_name();
			$controller_method_name = $this->routes[$method][$uri]['controller_method'];
			$controller->$controller_method_name();
			echo "<br>done<br>";
		} else {
			echo "<div style='width:full;height:screen;background:black;color:white;'>404 - Not Found</div>";
		}

	}








}

