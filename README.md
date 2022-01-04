# App Github

### Tecnologias

- PHP
- Laravel
- MySQL

### User history

- Criar um sistema de registro e login de usuário.
- Criar uma interface para encontrar os melhores programadores do mercado no github, de preferência os 500 primeiros.
- Utilizar a API do github: https://developer.github.com/v3/

### Instalação

- Ter o PHP instalado no computador.  
````
  sudo apt-get install apache2 php libapache2-mod-php
  sudo apt-get install php-soap php-xml php-curl php-opcache php-gd php-sqlite3 php-mbstring
````
- Ter o MySQL instalado no computador.
```` 
sudo apt install mysql-server
````
- Ter o Composer instalado no computador.
````
curl -sS https://getcomposer.org/installer -o composer-setup.php
HASH=`curl -sS https://composer.github.io/installer.sig`
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

````

- Clonar esse repósitorio

- Criar um banco de dados MySQL.

- Alterar o arquivo ".env.example" para só ".env" e editar os dados de conexão do banco de dados para a sua maquina local.

- Rodar no terminal do projeto os seguintes comandos.
````
php artisan migrate
php artisan serve
````

