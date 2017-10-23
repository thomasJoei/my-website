# Had to do at after vagrant up

```sh
sudo apt-get update
sudo apt-get install php7.0-mcrypt
sudo apt-get upgrade
sudo apt-get install php-mcrypt

echo -e '[mysqld]\nsql-mode=""' | sudo tee --append /etc/mysql/conf.d/craft.cnf > /dev/null
service mysql restart
``` 

# MySql
user: homestead
password: secret


# PROD installation

```sh
sudo apt-get install python-software-properties
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y php7.0
sudo add-apt-repository ppa:ondrej/apache2
sudo apt-get update
sudo apt-get install apache2
sudo add-apt-repository -y ppa:ondrej/mysql-5.6
sudo apt-get update
sudo apt-get install mysql-server-5.6
sudo apt-cache search php7-*
sudo apt-get install php7.0-mbstring
sudo apt-get install libapache2-mod-php7.0 php7.0-mysql php7.0-curl php7.0-json

``` 
