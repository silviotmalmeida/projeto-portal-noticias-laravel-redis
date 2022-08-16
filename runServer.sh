#!/bin/bash

echo "Definindo permissoes da pasta de código-fonte..."
docker container exec portal-noticias-laravel-redis chmod 777 -R /root
sleep 1

echo "Iniciando o servidor..."
docker container exec -it portal-noticias-laravel-redis bash -c "cd /root/app/app_portal_noticias; php artisan serve --host=0.0.0.0 --port=8080;"
