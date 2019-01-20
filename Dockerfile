FROM php:7.2

ADD . /app

WORKDIR /app

RUN curl -s --insecure https://getcomposer.org/composer.phar \
    -o /usr/bin/composer && \
    chmod +x /usr/bin/composer && \
    apt-get update -qq && \
    apt-get install -qq git zlib1g-dev && \
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-install zip pcntl pdo pdo_mysql && \
    composer install -v && \
    cp .env.test .env

EXPOSE 8000

CMD php bin/console server:run 0.0.0.0:8000
