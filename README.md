# Had to do at after vagrant up

```sh
sudo apt-get update
sudo apt-get install php7.0-mcrypt
sudo apt-get upgrade
sudo apt-get install php-mcrypt

echo -e '[mysqld]\nsql-mode=""' | sudo tee --append /etc/mysql/conf.d/craft.cnf > /dev/null
service mysql restart
``
`
## MySql
user: homestead
password: secret