# ft_server

## Final grade : 100/100

## Description

ft_server is a project that asks you to run a Ngnix web server on Debian Buster through Docker with Wordpress, Phpmyadmin and Mysql runnning.

## Usage

```shell
# Build image
docker build -t ft_server .

# Run image
docker run -it -p 80:80 -p 443:443 ft_server
```
* SSL auto-certificate is created
* MySQL is automatically created
* Wordpress is automatically setup
