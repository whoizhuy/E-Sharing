# E-SHARING WEBSITE USING LARAVEL FRAMEWORK
## Installing project:
## Step 1:
Open Terminal, clone project, go the file
```
git clone https://github.com/whoizhuy/E-Sharing.git

cd E-Sharing
```
## Step 2:
Run composer and npm to install necessary packages in project
```
composer install

npm install
```
## Step 3:
Create Database and config <br>
Open mysql workbench and create new database with example name "data" <br>
Update your Env file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=data //database name here
DB_USERNAME=root
DB_PASSWORD=
```
## Step 4:
Generate key for project
```
php artisan key:generate
```
## Step 5:
Migrate Database
```
php artisan migrate

php artisan db:seed
```
## Step 6:
Run website on browser
```
php artisan serve
```
Then enter your localhost address to browser and enjoin the website