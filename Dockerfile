FROM image-registry.openshift-image-registry.svc:5000/openshift/php:latest
ADD ./index.php /var/www/html/
CMD ["php","-S","0.0.0.0:8080","-t","/var/www/html"]
