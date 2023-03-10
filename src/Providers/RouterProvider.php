<?php
declare(strict_types=1);

/**
 * This file is part of the Vökuró.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Phamr\Providers;

use Exception;
use Phalcon\Di\DiInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Mvc\Router;
use Phamr\Application;

class RouterProvider implements ServiceProviderInterface
{
    /**
     * @var string
     */
    protected $providerName = 'router';

    /**
     * @param DiInterface $di
     *
     * @return void
     */
    public function register(DiInterface $di): void
    {
        /** @var Application $application */
        $application = $di->getShared(Application::APPLICATION_PROVIDER);
        /** @var string $basePath */
        $basePath = $application->getRootPath();

        $di->set($this->providerName, function () use ($basePath) {
            $router = new Router();
            $routes = $basePath . '/config/routes.php';
            $modulesFile  = $basePath . '/config/modules.php';
            if (!file_exists($routes) || !is_readable($routes)) {
                throw new Exception($routes . ' file does not exist or is not readable.');
            }
            if (!file_exists($modulesFile) || !is_readable($modulesFile)) {
                throw new Exception($modulesFile . ' file does not exist or is not readable.');
            }
            require_once $routes;
            $modules = include $modulesFile;
            foreach ($modules as $module){
                if(file_exists($basePath . '/modules/'.$module.'/router.php')){
                    require_once $basePath . '/modules/'.$module.'/router.php';
                }
            }
            return $router;
        });
    }
}
