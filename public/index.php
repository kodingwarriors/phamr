<?php
/**
 * This file is part of the Phamr.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use Phamr\Application as Bootstrap;

error_reporting(E_ALL);
$rootPath = dirname(__DIR__);

try {
    require_once $rootPath . '/vendor/autoload.php';

    /**
     * Load .env configurations
     */
    Dotenv\Dotenv::create($rootPath)->load();

    /**
     * Run Vökuró!
     */
    echo (new Bootstrap($rootPath))->run();
} catch (Exception $e) {
    echo $e->getMessage(), '<br>';
    echo nl2br(htmlentities($e->getTraceAsString()));
}
