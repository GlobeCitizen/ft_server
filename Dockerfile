# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mahnich <mahnich@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/04/29 19:12:13 by mahnich           #+#    #+#              #
#    Updated: 2020/05/06 18:39:41 by mahnich          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#The container OS

FROM debian:buster

LABEL Mohamed AHNICH <mahnich@student.42.fr>

# COPY CONTENT

COPY ./srcs/mysql_setup.sql /var/
COPY ./srcs/start.sh /var/

# UPDATE
RUN apt-get update
RUN apt-get upgrade -y

# INSTALL NGINX
RUN apt-get -y install nginx

# INSTALL MYSQL
RUN apt-get -y install mariadb-server

# INSTALL PHP
RUN apt-get -y install php7.3 php-mysql php-fpm php-cli php-mbstring

# INSTALL TOOLS
RUN apt-get -y install wget

#Setup nginx

COPY ./srcs/localhost.conf /etc/nginx/sites-available/localhost
RUN ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
RUN	rm -f /etc/nginx/sites-enabled/default

#Wordpress Install
WORKDIR /var/www/html
RUN		wget https://wordpress.org/latest.tar.gz

RUN		tar xzf latest.tar.gz && \
		rm -f latest.tar.gz

COPY ./srcs/wp-config.php /wordpress

#Configure a wordpress database

RUN service mysql start && mysql -u root mysql < /var/mysql_setup.sql

#phpMyAdmin

RUN		wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-all-languages.tar.xz

RUN		tar xf phpMyAdmin-4.9.2-all-languages.tar.xz && \
		rm -f phpMyAdmin-4.9.2-all-languages.tar.xz && \
		mv phpMyAdmin-4.9.2-all-languages phpmyadmin

RUN mv phpmyadmin /var/www/html/wordpress
COPY    ./srcs/config.inc.php /var/www/html/wordpress/phpmyadmin


#SSL certificate

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=FR/ST=75/L=Paris/O=42/CN=mahnich' -keyout /etc/ssl/certs/localhost.key -out /etc/ssl/certs/localhost.crt

#ALLOW NGINX USER

RUN chown -R www-data:www-data /var/www/*
RUN chmod -R 755 *

#Start services

CMD bash /var/start.sh

EXPOSE 80 443