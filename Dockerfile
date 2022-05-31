FROM php:7.4.18-apache-buster
LABEL author="Jonathan Cooper <https://joncooperworks.com>"

RUN apt-get update && apt-get -y upgrade
RUN apt-get install -y xvfb
RUN apt-get install -y wkhtmltopdf

# Expose apache.
EXPOSE 80

# Copy this repo into place.
ADD www /var/www/html

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
