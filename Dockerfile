FROM nginx
RUN apt-get update -y && apt-get dist-upgrade -y && apt-get autoremove --purge -y && apt-get autoclean -y
COPY default.conf /etc/nginx/conf.d/default.conf
COPY mime.types /etc/nginx/mime.types
COPY . /usr/share/nginx/html
