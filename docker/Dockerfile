FROM nexus-docker.ufms.br/agetic/php-apache_7_3:1.3.3

ENV APP_HOME /var/www/html

ARG ctoken

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

COPY docker/custom-vhost.conf /etc/apache2/sites-available/custom-vhost.conf
COPY docker/php.ini /usr/local/etc/php/php.ini

RUN a2enmod rewrite && echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update && apt-get install -y \
    libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
	&& docker-php-ext-enable imagick

COPY . $APP_HOME

WORKDIR $APP_HOME

RUN php composer.phar config --global http-basic.gitlab.ufms.br __token__ $ctoken

RUN php composer.phar install \
      --no-interaction \
      --no-suggest

RUN mv config/app.homolog.php config/app.php && \
      mv webroot/sample.htaccess webroot/.htaccess && \
      sed -i -e "s/__SALT__/$(tr -dc A-Za-z0-9 </dev/urandom | head -c 32 ; echo '')/" config/app.php && \
      chgrp -R www-data logs tmp && \
      chmod -R g+rw logs tmp

USER 1000

EXPOSE 8080

CMD ["docker/start-apache.sh"]
