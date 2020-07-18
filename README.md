# :low_brightness: Crud Laravel - Lista de Livros

![Captura de tela de 2020-07-18 16-08-16](https://user-images.githubusercontent.com/49164290/87860137-62f3e700-c911-11ea-85a4-220696493d1d.png)

## Tecnologias

- Laravel 7
- SQLite
- BootStrap4

## :desktop_computer: Configuração

1 - Clone o projeto
```
https://github.com/MaduFernandes/crud_laravel.git
```

2 - Duplique o arquivo **.env.example** e renomeie para **.env**

3 - No arquivo **.env** configure os campos:

```
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DATABASENAME
DB_USERNAME=USER
DB_PASSWORD=PASSWORD
```

4 - Instale as depedências

```
composer install
```

5 -  Defina uma nova chave no seu arquivo **.env** com:

```
php artisan key:generate
```

6 - Para rodar as **migrations**:

```
php artisan migrate
```

7 - Para subir o projeto:

```
php artisan server
```

Agora você pode acessar o projeto acessando http://127.0.0.1:8000

