# Revisando o PHP

## Objetivo

Revisar os principais tópicos iniciais da ferramenta `PHP` usando containers docker.

## Pré-requisitos

- `Docker`.
- `Docker compose`.
- `10GB de armazenamento`.
- `Visual Studio Code`

## Ferramentas/Serviços

Inicialmente serão usados os serviços:
 - `PHP`: servidor web.
 - `PostgreSQL`: banco de dados relacional.
 - `Docker/Docker compose`: gerenciamento dos containers.

## Variáveis de ambiente

As variáveis de ambiente estão contidas no arquivo **`.env`**. <br>
Inicialmente o arquivo contém apenas as variáveis: 
- `POSTGRES_USER`
- `POSTGRES_PASSWORD`
- `POSTGRES_DB`

Essas variáveis são usadas para a configuração inicial do banco de dado e na conexão entre os serviços.

## Gerenciando os containers (`Docker-compose.yaml`)

Usamos o arquivo `Docker-compose.yaml` para realizar a configuração e gerenciamento de recursos dos(as) serviços/imagens docker. O arquivo presente nesse repositório configura os serviços:

- `web`: Imagem oficial do servidor web PHP ([php:apache](https://hub.docker.com/_/php)). 
- `bd`: Imagem oficial do banco de dados PostgresSQL na versão alpine ([postgres:alpine](https://hub.docker.com/_/postgres)). 

## Organização de pastas

- `./app`: volume docker/pasta destinada para o compartilhamento dos arquivos `.php` que serão repassados para a pasta `/var/www/html` do container `PHP`.
- `./postgres`: volume docker/pasta serve para persistir os dados do banco de dados em um diretório externo ao contêiner. 

## Executando o projeto

Para executar a aplicação:

- Abra um terminal na pasta do repositório
- Execute o comando 

 ```
docker compose up
 ```

- Para finalizar os processos
 ```
docker compose down
 ```