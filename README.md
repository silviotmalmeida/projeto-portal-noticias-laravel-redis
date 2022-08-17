# Projeto PORTAL-NOTICIAS-LARAVEL-REDIS

## Projeto construído durante o curso "Desenvolvimento Web Avançado 2022 com PHP, Laravel e Vue.JS" do professor Jorge Sant Ana.

Trata-se da implementação de um portal de notícias para exemplificar a utilização do Redis no Laravel.

O projeto encontra-se dockerizado para facilitar a implantação. As orientações para execução estão listadas abaixo:

- Criar e carregar a imagem docker portal-noticias-laravel-redis conforme passos da pasta image;

- Para iniciar o container utiliza-se o comando "sudo ./startContainers.sh";

- Para instalar as dependências Composer do projeto utiliza-se o comando "sudo ./runComposerInstall";

- Para aplicar as migrations utiliza-se o comando "sudo ./runMigrate.sh";

- Para criar uma massa de dados de teste utiliza-se o comando "sudo ./runSeed.sh";

- Para iniciar o redis utiliza-se o comando "sudo ./runRedis.sh";

- Para iniciar o servidor utiliza-se o comando "sudo ./runServer.sh";

- O sistema estará disponível na URL "0.0.0.0:8080/article";

- Para encerrar a execução utiliza-se o comando "sudo ./stopContainers.sh";

Foram incluídos diversos comentários para facilitar o entendimento do código.


Principais comandos do laravel:

- Para criar um projeto laravel utiliza-se o comando: composer create-project --prefer-dist laravel/laravel nome-do-projeto "versão do laravel"

- Para instalar o Laravel-Debugbar utiliza-se o comando, na pasta raiz do projeto: composer require barryvdh/laravel-debugbar=3.6.2 --dev

- Para instalar o Predis utiliza-se o comando, na pasta raiz do projeto: composer require predis/predis=v1.1.7

- Para criar um controller utiliza-se o comando, na pasta raiz do projeto: php artisan make:controller nome-do-controller-Controller

- Para criar um controller com ações padrões pré-definidas utiliza-se o comando, na pasta raiz do projeto: php artisan make:controller --resource nome-do-controller-Controller

- Para criar um middleware utiliza-se o comando, na pasta raiz do projeto: php artisan make:middleware nome-do-middleware-Middleware

- Para criar uma model e sua migration utiliza-se o comando, na pasta raiz do projeto: php artisan make:model nome-da-model -m

- Para criar uma model com sua migration e controller utiliza-se o comando, na pasta raiz do projeto: php artisan make:model --migration --controller --resource nome-da-model, ou na sua forma abreviada, php artisan make:model -mcr nome-da-model

- Para criar uma model com sua migration, controller e seeder utiliza-se o comando, na pasta raiz do projeto: php artisan make:model --all nome-da-model, ou na sua forma abreviada, php artisan make:model -a nome-da-model

- Para criar um seeder de dados utiliza-se o comando, na pasta raiz do projeto: php artisan make:seeder nome-da-model-Seeder

- Para criar uma factory de objetos utiliza-se o comando, na pasta raiz do projeto: php artisan make:factory nome-da-model-Factory --model=nome-da-model 

- Para criar uma notificação utiliza-se o comando, na pasta raiz do projeto: php artisan make:notification nome-da-notificação-Notification

- Para criar um template de email utiliza-se o comando, na pasta raiz do projeto: php artisan make:mail nome-do-controlador-Mail --markdown nome-da-view

- Para criar uma cópia dos estilos gerais de email do laravel para o seu projeto local, visando customização, utiliza-se o comando, na pasta raiz do projeto: php artisan vendor:publish, em seguida selecionar a opção 14

- Para criar uma classe de exportação para o laravel-excel utiliza-se o comando, na pasta raiz do projeto: php artisan make:export nome-do-model-Export --model=nome-do-model

- Para aplicar as migrations utiliza-se o comando, na pasta raiz do projeto: php artisan migrate

- Para reverter as migrations utiliza-se o comando, na pasta raiz do projeto: php artisan migrate:rollback --step=número-de-passos-a-serem-revertidos

- Para criar listar as rotas disponíveis utiliza-se o comando, na pasta raiz do projeto: php artisan route:list

- Para criar um link simbólico entre o storage local e a pasta pública do app utiliza-se o comando, na pasta raiz do projeto: php artisan storage:link


