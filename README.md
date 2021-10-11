

# Capgemini teste - Backend

  API  de conta bancária desenvolvida em [Laravel](https://laravel.com/).
  ### Funcionalidades:
  - Saque
  - Depósito
  - Movimentações
  

## Pré-requisitos

- PHP >= 7.2.5
- Composer

## Para rodar este projeto

- Clone o repositório

```bash

$ git clone https://github.com/MariaElane/capgemini-back-end.git

```

- Instale as dependências do Composer

```bash

$ composer install

```

- Renomeie o arquivo **.env.example** para **.env** e altere o arquivo de acordo com as configurações do banco.

> O projeto foi desenvolvido utilizando SQLite como banco de dados. Crie um arquivo chamado: **database.sqlite** dentro do diretório **database**.

  

- Gere a chave da aplicação com o comando:

```bash

$ php artisan key:generate

```
- Gere a chave do JWT com o comando:

```bash

$ php artisan jwt:secret

```

- Execute as *migrations* das tabelas

```bash

$ php artisan migrate --seed

```
> Ao executar o comando serão criados dois usuários para a realização dos testes:
> > **Usuário 1:**
> - E-mail: capgemini@gmail.com
> - Senha: capgemini123
>> **Usuário 2:**
> - E-mail: teste@gmail.com
> - Senha: capgemini123


- Por fim, execute o projeto com os comandos:

```bash

$ php artisan serve

```
## Rotas da API
Recurso   | Endpoint | Métodos HTTP aceitos
--------- | ---------|-----------
Login | [/login](http://127.0.0.1:8000/api/login/)|POST
Saldo/Movimentações| [/api/balance](http://127.0.0.1:8000/api/balance)| POST
Saque| [/api/withdraw](http://127.0.0.1:8000/api/withdraw)|POST
Deposito| [/api/deposit](http://127.0.0.1:8000/api/deposit)|POST

> Todas as rotas, exceto, a de login, necessitam de autenticação.
