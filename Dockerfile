FROM ubuntu:trusty
MAINTAINER neptune104 <neptune104@nate.com>

RUN apt-get update
RUN apt-get install -y apache2 php5.6 php5.6-common php5.6-json php5.6-opcache php5.6-zip php5.6-mysql php5.6-phpdbg php5.6-gd php5.6-imap php5.6-ldap php5.6-pgsql php5.6-pspell php5.6-recode php5.6-tidy php5.6-dev php5.6-intl php5.6-curl php5.6-mcrypt php5.6-xmlrpc php5.6-xsl php5.6-bz2 php5.6-mbstring pkg-config libmagickwand-dev imagemagick build-essential libapache2-mod-php5 vim

COPY ./html/login.php /var/www/html/index.php
#COPY ./html/login.php /var/www/html/index.php
COPY ./html/images  /var/www/html/

EXPOSE 80
WORKDIR /var/www/html

ENTRYPOINT ["/usr/sbin/apache2ctl","-D","FOREGROUND"]
