# Laravue API

Bolerplate de API Laravel com multi-tenancy e ACL

## Como rodar o projeto

Clonar repositório do github

```sh
git clone git@github.com:paulokalleby/laravue-api.git
```

```sh
cd laravue-api
```

Subir containers do projeto

```sh
./vendor/bin/sail up -d
```

Instalar dependências

```sh
./vendor/bin/sail composer i
```

Gere a chave do projeto Laravel

```sh
./vendor/bin/sail artisan key:generate
```

Execute a migração do banco de dados e popule a tabela de permissões

```sh
./vendor/bin/sail artisan migrate --seed
```

Acesse a documentação da api
[http://localhost:8000](http://localhost:8000)
