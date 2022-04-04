<p align="center">
   <img src="./.github/header-logo.svg" width="150"/>
</p>

# :car: OneSearch

> Permiti buscar anúncios de veículos na OLX através de um crawler.

[![GitHub Stars][github-stars]][github-stars]
[![Build Status][build-status]][build-status]

Aplicação é uma api crawler que permiti a busca de anúncios de véiculos na OLX.

<p align="center">
  <img src="./.github/home.png">
</p>

## :nazar_amulet: Objetivo

| Desenvolver um api que permita extrair informações de um site.

## :black_nib: Justificativa

| Teste técnico para uma vaga de emprego.

## :man_technologist: Autor

| Foto                                                                                                                             | Nome                      | GitHub                                   | Likedin                                                 | E-mail                    |
| -------------------------------------------------------------------------------------------------------------------------------- | ------------------------- | ---------------------------------------- | ------------------------------------------------------- | ------------------------- |
| <img src="https://avatars2.githubusercontent.com/u/56545903?s=400&u=7445f50f4a7c02a76fef37d74a1f84b2bf2c7109&v=4" width="100px"> | Jefferson de Santana Eloy | [Jefferson](https://github.com/jeffeloy) | [Linkedin](https://www.linkedin.com/in/jefferson-eloy/) | contatojeloydev@gmail.com |

## :computer: Tecnologias

- [Laravel](https://laravel.com/docs/9.x)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Observação

De ontem para hoje por algum motivo houveram mudanças no site da OLX que fizeram o crawler parar de funcionar, porém já resolvi os problemas e está funcionando novamente.
Mas se caso ao testarem não tiver funcionando a parte do crawler, pode ser por conta de alguma nova mudança no site da OLX.

Segue um link para o vídeo com aplicação funcionando:
[OneSearch](https://drive.google.com/file/d/1SUVMsYqV8dvQx0_IO7_BpYu7GAlUDmdC/view?usp=sharing)

## :construction_worker: Pré Requisitos

Você precisa instalar o [Composer](https://getcomposer.org/doc/00-intro.md), [Docker](https://www.docker.com/) e o [Docker Compose](https://docs.docker.com/compose/) primeiro e, em seguida clone o repositório executando este comando:

```
git clone https://github.com/jeffeloy/olx-laravel-crawler/
```

## :wrench: Executar o projeto
| Após ter o projeto clonado e já está dentro da pasta olx-laravel-crawler.

1. Execute `cp .env.example .env` para criar o .env.
2. Execute `docker-compose up` para rodar aplicação.
3. Acesse o navegador e digite `http://127.0.0.1:8000`.

## :wrench: Rota da API
| Para testar a rota do crawler na api.

1. Acesse o navegador e digite `http://127.0.0.1:8000/api/crawler`.
2. Parâmetros obrigatórios:
  - `search`: Nome do carro: Ex: Palio
  - `fuel`: Combustivel: Ex:gasolina
  - `numberDoors`: Número de portas: Ex:2


## :open_book: License

Lançado em 2020.
Este projeto está sob a [MIT license](https://github.com/jeffeloy/olx-laravel-crawler/blob/master/LICENSE).

<p align="center">
    Feito com :heart: por <a href="https://github.com/jeffeloy">Jefferson Eloy</a>
</p>

<!-- Markdown link & img dfn's -->

[github-stars]: https://img.shields.io/github/stars/jeffeloy/olx-laravel-crawler?logoColor=04D361&style=social
[build-status]: https://img.shields.io/travis/dbader/node-datadog-metrics/master.svg?color=04D361&style=plastic
