For whom it is useful: are you looking for a minimal working PHP code example with a Postgres database deployed on Linux Ubuntu

Here is an approximate list of commands (php, apache2, its extension for postgres), most likely the commands will not be relevant in the future. PHP version 8
For ubuntu 24:

sudo apt install apache2
sudo add-apt-repository ppa:ondrej/php
sudo apt install php8.2 php8.2-cli php8.2-{bz2,curl,mbstring,intl}
sudo apt-get install php8.2-pgsql
 sudo service apache2 restart

File .php must be:
/var/www/html/hello_db.php

For Virtual box:
set up a network bridge and net before installing ubuntu, later it will help you connect to it from ssh and work with an environment that is convenient for you

Docker:
docker run -d --name test_pg_db -e POSTGRES_USER=test_pg -e POSTGRES_PASSWORD=test_pg -p 5422:5432 postgres:latest

SQL:
create table messages(id serial, message text);


Add:
use vim, curl for edit and test

Output:
![image](https://github.com/user-attachments/assets/5ea4bc5a-2e3a-465c-b6dc-68e3000423b7)
