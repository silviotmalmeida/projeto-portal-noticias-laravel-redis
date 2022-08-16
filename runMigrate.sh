#!/bin/bash

echo "Definindo permissoes da pasta de código-fonte..."
docker container exec portal-noticias-laravel-redis chmod 777 -R /root
sleep 1

echo "Aplicando as migrations..."
docker container exec -it portal-noticias-laravel-redis bash -c "cd /root/app/app_portal_noticias/database; rm -rf database.sqlite; touch database.sqlite; cd /root/app/app_portal_noticias; php artisan migrate;"
