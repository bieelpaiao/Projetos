#!/bin/bash

echo "Atualizando o Sistema..."
apt-get update
apt-get upgrade -y

echo "Instalando componentes..."
apt-get install apache2 -y
apt-get install unzip -y
apt-get install wget -y

echo "Baixando e hospedando a aplicação do Github..."
cd /tmp
wget https://github.com/denilsonbonatti/linux-site-dio/archive/refs/heads/main.zip
cd linux-site-dio-main
cp -R * /var/www/html/