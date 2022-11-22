FROM igor972/apache-clean

WORKDIR /var/www/html

RUN apt update

# comandos executados ao subir container
ENTRYPOINT /etc/init.d/apache2 start && \
    /bin/bash