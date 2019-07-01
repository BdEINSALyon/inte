FROM php as staticmaker
WORKDIR /build
COPY . /build
RUN /build/staticify.sh


FROM nginx
COPY default.conf /etc/nginx/conf.d/default.conf
COPY mime.types /etc/nginx/mime.types

COPY --from=staticmaker /build/html-static/ /usr/share/nginx/html