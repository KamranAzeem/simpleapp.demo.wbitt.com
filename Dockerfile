FROM nginx
COPY htdocs/ /usr/share/nginx/html/
COPY site.conf /config/site.conf
