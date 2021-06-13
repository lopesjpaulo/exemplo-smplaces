# Instruções para executar o projeto

## Clonar o projeto

## Rodar os comandos após o clone

```
docker-compose up -d
```
```
docker exec -ti exemplosmplaces_app_1 bash -c "cd /var/www/html && composer install -vvv && cp .env.example .env && php artisan migrate"
```

## Requisição para o projeto

Utilizando o postman ou qualquer outro aplicativo do tipo

- POST:

    http://localhost/transactions

    Header: 

    ```Authorization: key_secret```

    Payload:

    ```
    {
    "amount": 13.01
    }
    ```

## Testes

Executar com o PHPUnit:

```
docker exec -ti exemplosmplaces_app_1 bash -c "vendor/bin/phpunit --filter=testTransaction"
```