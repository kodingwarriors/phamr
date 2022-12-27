<?php
/**
 * This file is part of the Phamr.
 *
 *
 *
 *
 */

use Phalcon\Http\Response;
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
     * Run Phamr!
     */
    echo (new Bootstrap($rootPath))->run();
    //phpinfo();
} catch (Exception $e) {
    header('Location: '.getenv('APP_BASE_URI').'404');
    //echo $e->getMessage(), '<br>';
    //print_r($e->getTraceAsString());
    //echo $e->getTraceAsString();
    //echo nl2br(htmlentities($e->getTraceAsString()));
}
