<?php declare(strict_types = 1);

namespace Tests\Cases\E2E\Container;

use App\Bootstrap;
use Nette\Application\Application as WebApplication;
use Nette\DI\Container;
use Tester\Assert;
use Tester\TestCase;

require_once __DIR__ . '/../../../bootstrap.php';

final class EntrypointTest extends TestCase
{

	public function testWeb(): void
	{
		$container = Bootstrap::boot()->createContainer();
		$container->getByType(WebApplication::class);

		Assert::type(Container::class, $container);
	}

}

(new EntrypointTest())->run();
