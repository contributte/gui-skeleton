<?php declare(strict_types = 1);

namespace App\Router;

use Nette\Application\Routers\RouteList;

final class RouterFactory
{

	public static function createRouter(): RouteList
	{
		$router = new RouteList();

		$router->addRoute('<module>[[/<presenter>]/<action>[/<id>]]', [
			'module' => 'FormsBootstrap',
			'presenter' => 'Homepage',
			'action' => 'default',
		]);

		return $router;
	}

}
