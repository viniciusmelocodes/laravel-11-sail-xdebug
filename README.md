# Criação desse repositório com Linux

Criar projeto:

```bash
composer create-project laravel/laravel laravel-11-sail-xdebug
```

Adicionar pacote sail com composer:

```bash
composer require laravel/sail --dev
```

Instalar pacote sail:

```bash
php artisan sail:install
```

Publicar o pacote sail para gerar a pasta docker:

```bash
./vendor/bin/sail artisan sail:publish
```

Adicionar no .env:

```bash
SAIL_XDEBUG_MODE=develop,debug,coverage
```

Adicionar no php.ini da versão PHP do docker-compose.yml da pasta docker:

```ini
[XDebug]
xdebug.start_with_request = yes
xdebug.discover_client_host = true
xdebug.max_nesting_level = 256
xdebug.client_host = host.docker.internal
```

## Para VSCode
Com a extensão PHP Debug da xdebug, adicionar uma nova configuração de debug para PHP e incluir abaixo da configuração de porta 9003:

```json
"pathMappings": {
    "/var/www/html": "${workspaceFolder}"
},
"hostname": "0.0.0.0"
```

Build no projeto para que as configurações acima funcionem:

```bash
./vendor/bin/sail up -d --build
```

Adicionar um breakpoint no arquivo web.php e recarregar a página welcome. A aplicação vai pausar e é só seguir os atalhos do PHPStorm ou VSCode.