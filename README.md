# testeUDSAPI
API para acesso e persistência de dados ao projeto testeUDS

**BANCO DE DADOS**

Nome do schema -> teste_uds

**ARQUIVO DE CONEXÃO**

.env localizado na pasta raiz do sistema

****MIGRATIONS E SEEDS****
Foram criadas as tabelas e as cargas iniciais, para criaçao das tabelas do projeto. Para a realização da carga rode o comando artisan:
//Rodar Migrate do projeto testeUDSAPI

php artisan migrate:refresh --seed

_Obs.: No caso de problema com o comando, existe um arquivo com sql das tabeleas e dados como nome_ **banco.sql** _localizado na pasta raiz do projeto_

**RODAR API**
É necessário que está API rode na porta 8010. Segue o comando artisan:
php artisan serve --port 8010
