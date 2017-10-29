sudo apt-get --yes update
sudo apt-get --yes install php7.0-mcrypt
sudo apt-get --yes upgrade
sudo apt-get --yes install php-mcrypt

echo -e '[mysqld]\nsql-mode=""' | sudo tee --append /etc/mysql/conf.d/craft.cnf > /dev/null
service mysql restart

# Restart Apache
sudo cp ./php.ini /etc/php/7.1/apache2/php.ini
sudo /etc/init.d/apache2 restart

# Import Database
./import-db.sh