<?php
declare(strict_types=1);

/**
 * This file is part of the Phamr.
 *
 * (c) KodingWarriors Team <dwi.agus.pur@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Phalcon\Mvc\Router;

/**
 * @var $router Router
 */

$router->add('/confirm/{code}/{email}', [
    'controller' => 'user_control',
    'action'     => 'confirmEmail',
]);

$router->add('/reset-password/{code}/{email}', [
    'controller' => 'user_control',
    'action'     => 'resetPassword',
]);

$router->notFound(
    [
        'controller' => 'index',
        'action'     => 'notfound',
    ]
);