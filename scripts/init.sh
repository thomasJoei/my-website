sudo apt-get --yes update
sudo apt-get --yes install php7.0-mcrypt
sudo apt-get --yes upgrade
sudo apt-get --yes install php-mcrypt

echo -e '[mysqld]\nsql-mode=""' | sudo tee --append /etc/mysql/conf.d/craft.cnf > /dev/null
service mysql restart
sudo /etc/init.d/apache2 restart