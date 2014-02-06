FROM ubuntu:quantal
MAINTAINER Lucas Carlson <lucas@rufy.com>

# Let's get serf
RUN apt-get update -q
RUN apt-get install -qy git supervisor unzip apache2 libapache2-mod-php5 php5-mysql
ADD https://dl.bintray.com/mitchellh/serf/0.3.0_linux_amd64.zip /serf.zip
RUN unzip serf.zip
RUN mv serf /usr/bin/

ADD /start-apache2.sh /start-apache2.sh
ADD /start-serf.sh /start-serf.sh
ADD /serf-join.sh /serf-join.sh
ADD /run.sh /run.sh
ADD /supervisord-apache2.conf /etc/supervisor/conf.d/supervisord-apache2.conf
ADD /supervisord-serf.conf /etc/supervisor/conf.d/supervisord-serf.conf
RUN chmod 755 /*.sh

RUN git clone https://github.com/WordPress/WordPress.git /app
ADD /wp-config.php /app/wp-config.php
RUN rm -fr /var/www /serf.zip && ln -s /app /var/www
RUN a2enmod rewrite
ADD /security /etc/apache2/conf.d/security
ADD /php.ini /etc/php5/apache2/php.ini

EXPOSE 80
CMD ["/run.sh"]
