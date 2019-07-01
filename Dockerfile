FROM trafex/alpine-nginx-php7
EXPOSE 8080
COPY . /var/www/html
CMD /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf