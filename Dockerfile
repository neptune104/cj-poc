FROM ubuntu:16.04
MAINTAINER neptune104 <neptune104@nate.com>

RUN apt-get update
RUN apt-get -y install software-properties-common python-software-properties
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get install -y apache2 php5.6 php5.6-common build-essential php5.6-mysql php5.6-curl php5.6-xml php5.6-zip php5.6-gd php5.6-mbstring php5.6-mcrypt

COPY ./html/login.php /var/www/html/index.php
#COPY ./html/login.php /var/www/html/index.php
COPY ./html/images  /var/www/html/

EXPOSE 80
WORKDIR /var/www/html

ENTRYPOINT ["/usr/sbin/apache2ctl","-D","FOREGROUND"]
