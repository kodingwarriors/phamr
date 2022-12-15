FROM php:8.1-fpm-alpine

LABEL maintainer="Dwi Agus Purwanto <github.com/mrcoco>"

ARG PHALCON_VERSION=5.1.2

RUN set -xe && \
        apk add --no-cache --virtual .build-deps \
            autoconf \
            g++ \
            make \
            libpq-dev \
            libpng-dev \
            libpng \
            libjpeg-turbo-dev \
            libwebp-dev \
            freetype-dev \
            zlib-dev \
            libxpm-dev \
            gd \
            postgresql-dev \
        && docker-php-ext-install pdo pdo_pgsql gd \
        && docker-php-source extract \
        && pecl channel-update pecl.php.net \
        && pecl install phalcon-5.1.2 && \
        && docker-php-ext-install phalcon \
    # Install ext-phalcon
#        curl -LO https://github.com/phalcon/cphalcon/archive/refs/tags/v${PHALCON_VERSION}.tar.gz && \
#        tar xzf /cphalcon-${PHALCON_VERSION}.tar.gz && \
#        docker-php-ext-install -j $(getconf _NPROCESSORS_ONLN) \
#            /cphalcon-${PHALCON_VERSION}/build/phalcon \
#        && \
#        # Remove all temp files
#        rm -r \
#            /v${PHALCON_VERSION}.tar.gz \
#            /cphalcon-${PHALCON_VERSION} \
#        && \
#        docker-php-source delete && \
        apk del .build-deps && \
        php -m

COPY docker-phalcon-* /usr/local/bin/