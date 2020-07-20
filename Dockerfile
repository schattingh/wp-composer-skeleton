FROM php:fpm-buster

RUN apt-get update -y
RUN apt-get install \
  git \
  unzip \
  wget \
  zip \
  --no-install-recommends -y

RUN wget --no-verbose --tries=5 --timeout=5 \
  https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
  -O /tmp/wp-cli.phar && \
  chmod +x /tmp/wp-cli.phar && \
  mv /tmp/wp-cli.phar /usr/local/bin/wp

RUN wget --no-verbose --tries=5 --timeout=5 \
  https://getcomposer.org/installer \
  -O /tmp/installer && \
  php /tmp/installer --install-dir=/tmp && \
  mv /tmp/composer.phar /usr/local/bin/composer

WORKDIR /app

ENTRYPOINT ["/bin/bash"]
