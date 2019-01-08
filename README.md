# Servidor Rest

Implementação básica para servidor rest com controle de autenticação servidos pelo Oauth2. 
Desenvolvido em PHP, com Laravel framwork 5.7 e mysql 5.7

## Ambiente de desenvolvimento
Linux Mint 19

### Instalando pré-requisitos

sudo apt update

* PHP 7.2
``` 
sudo apt-get install php7.2
php -v
```

* Composer version 1.7.3 2018-11-01 10:05:06
```
sudo apt install composer
```

* GIT
```
sudo apt install git
```

* NodeJs 8.12.0 e npm 6.4.1
```
sudo apt install nodejs npm 
node -v
```

* MySql version 5.7
```
sudo apt-get install mysql-server 
sudo mysql_secure_installation
```
Criar usuário para acesso do php
```
sudo su
mysql 

mysql> CREATE USER 'admin'@'localhost' IDENTIFIED BY 'password';
mysql> GRANT ALL PRIVILEGES ON * . * TO 'admin'@'localhost';
mysql> FLUSH PRIVILEGES;
mysql> exit
exit
```


```
Give examples
```

### Installing

$ composer install
$ php artisan migrate
$ php artisan db:seed
$ php passport install 

$ npm run 

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
