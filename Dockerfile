FROM alpine:latest

RUN apk add --no-cache wget php7 php7-json php7-phar php7-mbstring php7-openssl php7-fpm

RUN wget https://getcomposer.org/installer -O /tmp/composer-setup.php
RUN php /tmp/composer-setup.php
RUN cp composer.phar /usr/local/bin/composer

WORKDIR /app

CMD [ "/bin/ash" ]
