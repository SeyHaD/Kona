# Kona
WordPress theme

## Install WordPress

Download the latest version of WordPress:
````
wget http://wordpress.org/latest.zip
````

Copy the files from `wordpress/*` to `./` and clean:
````
cp -R wordpress/* ./
rm -rif wordpress
rm -rif latest.zip
````

## Install Composer
Run this command from the working directory:
````
php installer
````
This will install [Composer](https://getcomposer.org). Next install the dependencies using [Composer](https://getcomposer.org):
````
composer install
````

### Style
This theme uses [Tufte CSS](https://github.com/edwardtufte/tufte-css).


http://conpanna.net