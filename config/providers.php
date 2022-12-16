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

use Phamr\Providers\AclProvider;
use Phamr\Providers\AuthProvider;
use Phamr\Providers\ConfigProvider;
use Phamr\Providers\CryptProvider;
use Phamr\Providers\DbProvider;
use Phamr\Providers\DispatcherProvider;
use Phamr\Providers\FlashProvider;
use Phamr\Providers\LoggerProvider;
use Phamr\Providers\MailProvider;
use Phamr\Providers\ModelsMetadataProvider;
use Phamr\Providers\RouterProvider;
use Phamr\Providers\SecurityProvider;
use Phamr\Providers\SessionBagProvider;
use Phamr\Providers\SessionProvider;
use Phamr\Providers\UrlProvider;
use Phamr\Providers\ViewProvider;
use Phamr\Providers\AssetsProvider;

return [
    AclProvider::class,
    AuthProvider::class,
    ConfigProvider::class,
    CryptProvider::class,
    DbProvider::class,
    DispatcherProvider::class,
    FlashProvider::class,
    LoggerProvider::class,
    MailProvider::class,
    ModelsMetadataProvider::class,
    RouterProvider::class,
    SessionBagProvider::class,
    SessionProvider::class,
    SecurityProvider::class,
    UrlProvider::class,
    ViewProvider::class,
    AssetsProvider::class,
];
