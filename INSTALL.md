# Guia de Instalação

Este guia oferece passos básicos para configurar e executar o projeto localmente usando o 'xampp 7.4+' ou 'php spark'

## Clonar o Repositório

``` git
git clone https://github.com/Brunin12/CodeAdmin.git

```

## Configurar o Apache

Adicione a configuração do Virtual Host no seu arquivo de configuração do Apache.

Exemplo (`httpd-vhosts.conf`):

```apache
<VirtualHost *:80>
    DocumentRoot "Caminho/para/o/projeto"
    ServerName nomedoDominio.local
    ErrorLog "logs/nomedoDominio.local-error.log"
    CustomLog "logs/nomedoDominio.local-access.log" common
    <Directory "Caminho/para/o/projeto">
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

## Configurar o Arquivo Hosts

Adicione a entrada correspondente no arquivo de hosts (`C:\Windows\System32\drivers\etc\hosts`):

``` shell
127.0.0.1 nomedoDominio.local
```
ou
``` shell
127.0.0.1 nomedoDominio.server

```
ou
``` shell
127.0.0.1 nomedoDominio.com

```
ou
``` shell
127.0.0.1 nomedoDominio.qualquernome

```
etc....

obs: o dominio funciona apenas localmente e no ```http://```

## Reinicie o Apache

Após realizar essas configurações, reinicie o Apache para aplicar as mudanças.

Claro, aqui está um exemplo de como você pode criar um guia em Markdown para executar o projeto no Spark do CodeIgniter 4:

```markdown
# Rodando o Projeto com o Spark do CodeIgniter 4

Este guia oferece passos para executar o projeto usando o Spark, a CLI do CodeIgniter 4.

## Instalação do Spark

Certifique-se de ter o Spark instalado localmente:

```bash
composer spark --help
```

Se não estiver instalado, instale-o globalmente via Composer:

```bash
composer global require codeigniter4/framework:dev-develop
```

## Executando o Projeto

Navegue até o diretório do projeto e execute o servidor local com o Spark:

```bash
php spark serve
```

Isso iniciará um servidor local e mostrará a URL do seu projeto. Acesse essa URL em seu navegador para visualizar o projeto.
```

