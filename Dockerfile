FROM php:5-apache
ADD index.php /var/www/html/index.php
ADD phpinfo.php /var/www/html/phpinfo.php
ADD genload.php /var/www/html/genload.php
RUN chmod a+rx phpinfo.php
RUN chmod a+rx genload.php
RUN chmod a+rx index.php
