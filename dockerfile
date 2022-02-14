#menginstall software yang diperlukan seperti apache untuk https dan php
FROM php:7.4.26-apache


#memasukan file index.php untuk mengakses website
COPY index.php /var/www/html

#menginstall mysqli agar bisa mengakses mysql
RUN docker-php-ext-install mysqli

#access control list
RUN chmod -R 774 /var/www
RUN chown -R www-data /var/www
RUN chgrp -R www-data /var/www
