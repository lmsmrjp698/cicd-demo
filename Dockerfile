FROM image-registry.openshift-image-registry.svc:5000/openshift/php:latest

COPY index.php /var/www/html/
COPY images/ /var/www/html/images/

EXPOSE 8080

CMD ["php","-S","0.0.0.0:8080","-t","/var/www/html"]
