## About this Project
Projeto desenvolvido durante as aulas de tópicos avançados em informática no curso técnico integrado do IFSC 2020.1

## Passo 01 - Clonar projeto
`git clone https://github.com/lordjack/tai_aula_2020_laravel`

### Comandos para serem feitos após clonar o projeto, executar os comando abaixo dentro do diretorio do projeto

**Passo 02 - Instala dependencias e pacotes do projeto**  
`composer install`

**Passo 03 - Gerar uma chave de desenvolvimento para o projeto Laravel**  
`php artisan key:generate`

**Passo 04 - Configurar o arquivo de conexão com o banco de dados**  
 > .env

**Realizer a migração criando as tabelas do banco de dados**  
`php artisan migrate`

**Iniciar o servidor**  
`php artisan serve`

## Mais Comandos Básicos Úteis  
Esses comandos devem ser usados no terminal / cmd do projeto

**Listar os comandos**  
`php artisan list`

**Criar um arquivo de migração referenciando uma tabela**  
`php artisan make:migration create_table_nome_tabela --create=nome_tabela`

**Criar um Model e o -m já cria um arquivo de migração**  
`php artisan make:model NomeModel -m`

**Criar um Controller e o --model associa com o Model da tabela**  
`php artisan make:controller NomeTabelaController --resource --model=NomeTabelaModel`

**Executa a insersão dos registros no banco de dados**  
`php artisan db:seed`


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
