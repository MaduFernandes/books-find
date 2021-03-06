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

3 - Criei um arquivo no diretório `database` que tenha extensão .sqlite

3.1 - Instale o driver do sqlite.

```sh
sudo apt install php7.2-sqlite3
```

3.2 - No arquivo **.env** configure os campos:

```
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={.SQLITE-FILE-PATH}
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

