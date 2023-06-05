# Sistema de Gerenciamento de Clientes

Este é um sistema de gerenciamento de clientes desenvolvido com Laravel e PHP. Ele oferece uma API REST para cadastrar, editar, remover e consultar clientes. Além disso, permite a consulta de clientes com base no último número da placa do carro.

## Funcionalidades

- Cadastro de novo cliente via API
- Edição de um cliente existente via API
- Remoção de um cliente existente via API
- Consulta de dados de um cliente via API
- Consulta de todos os clientes com último número da placa igual a um número específico via API

## Tecnologias utilizadas

- Laravel
- PHP
- Docker
- MySQL

## Pré-requisitos

- Docker instalado na máquina

## Como executar o sistema

1. Clone este repositório em sua máquina:

   ```bash
   git clone https://github.com/RafaelGoos/teste_times.git

2. Acesse o diretório do projeto:

cd times

3. Execute o sistema usando o Docker Compose:

docker-compose up -d

4. Assegure-se de que o container do banco de dados esteja em execução e as migrações do banco de dados tenham sido aplicadas:

docker-compose exec app php artisan migrate

5. Agora, você pode usar uma ferramenta como o Postman para interagir com a API REST fornecida pelos endpoints mencionados acima.

# Licença 
Este projeto está licenciado sob a licença MIT.
