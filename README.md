# gohna
This is my personal project to learn Drupal 8

## Steps to setup projects

composer create-project --no-install drupal/recommended-project  project_name 
cd project_name
composer install
cd web
mkdir sites/default/files
sudo chmod -R 777 sites/default/files
cd  sites/default
cp default.settings.php  settings.php
chmod 777 settings.php
