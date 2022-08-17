#!/bin/bash

echo "Definindo permissoes da pasta de código-fonte..."
docker container exec portal-noticias-laravel-redis chmod 777 -R /root
sleep 1

echo "Iniciando o redis..."
docker container exec -it portal-noticias-laravel-redis bash -c "redis-server"
