## Prerequisites

PHP >= 7.1.3
PHP extension sqlite3 (required for teamtnt/tntsearch)
Node & NPM
Composer

## After Cloning Requirements to Run the Project

1) Create Empty Database
2) Update .env file with required credentials [DB_DATABASE, DB_USERNAME, DB_PASSWORD]
3) Add Envirnment Variables (For Dev Server)
	- [
		XOX_Client_ID=************
		XOX_Client_Secret=****************
		XOX_Auth_Redirect_URL=*****************

		Auth_Name=******************************

		APP_MIDDLEWARE_CLIENT_ID=***************************
		APP_MIDDLEWARE_CLIENT_SECRET=***********************

		XOX_MIDDLEWARE_PATH=***************** 
		SCOUT_DRIVER=tntsearch 

		COMPANY_EMAIL_ADDRESS="************"
	].
4) Run command under project [composer install] => For installing all the liberaries inside composer.json file
5) Run command under project [php artisan voyager:install --with-dummy] => For installing the basic setup of voyager in laravel project
6) Run command under project [composer dump-autoload && php artisan voyager-frontend:install] => For installing Voyager frontend used to link the website with voyager admin portal
7) Run command under project [npm install] => Install node libraries from package.json file
8) Run command under project [npm run dev] => Used to add vue.js setup for styling and javascript
9) Run command under project [php artisan voyager-page-blocks:install] => Used to add Page blockers in Voyager system