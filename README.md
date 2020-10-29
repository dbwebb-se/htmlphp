Web technologies - (htmlphp)
===================

[![Latest Stable Version](https://poser.pugx.org/dbwebb/htmlphp/v/stable)](https://packagist.org/packages/dbwebb/htmlphp)
[![Join the chat at https://gitter.im/mosbth/htmlphp](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/mosbth/htmlphp?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Build Status](https://travis-ci.org/dbwebb-se/htmlphp.svg?branch=master)](https://travis-ci.org/dbwebb-se/htmlphp)
[![CircleCI](https://circleci.com/gh/dbwebb-se/htmlphp.svg?style=svg)](https://circleci.com/gh/dbwebb-se/htmlphp)

Course material for course "htmlphp", aimed at a swedish target audience as an introduction to web programming for computer science students at University level.

Relased as part of a University course: https://dbwebb.se/kurser/htmlphp

The course repo is managed by a [dbwebb command line utility](https://dbwebb.se/dbwebb-cli).



Docker
-------------------

_Advanced usage for those familiar with docker and docker-compose._

You can use docker to run php and apache with the course repo. Check out the `docker-compose.yaml` in the root directory.

It works like this.



### Run some version of PHP

Run a version of php directly from the terminal.

```
$ docker-compose run php php --version                 
PHP 7.4.4 (cli) (built: Mar 31 2020 18:15:38) ( NTS )

$ docker-compose run php74 php --version              
PHP 7.4.4 (cli) (built: Mar 31 2020 18:15:38) ( NTS )

$ docker-compose run php73 php --version                  
PHP 7.3.16 (cli) (built: Mar 31 2020 18:42:19) ( NTS )

$ docker-compose run php72 php --version               
PHP 7.2.29 (cli) (built: Mar 31 2020 19:33:03) ( NTS )
```

Or start bash and work in the container.

```
$ docker-compose run php bash
anax@caf53f91add5:~/repo$ ls
LICENSE   README.md    bin    composer.json  docker-compose.yaml  me package-lock.json  vendor Makefile  REVISION.md  build  composer.lock  example node_modules  package.json               
```



### Run Apache with some version of PHP

Start Apache with some version of PHP.

```
$ docker-compose up apache
```

Or use `docker-compose up -d apache` to put the container in the background. The webserver is mapped onto the port 18080 so open your webserver to `http://localhost:18080/`.

In your webbrowser, open the file `example/utility/phpinfo.php` to check the version of php.

To run Apache with with another version of PHP you can use the container `apache74`, `apache73` or `apache72`.



Acknowledgement
-------------------

This is a co-effort of several people using freely available documentation and tools from the open source community.

For contributors, see the commit history and the issues.

Feel free to help building up the repository with more content suited for training and education.



```                                                            
 .                                                             
..:  Copyright (c) 2014 - 2018 Mikael Roos, mos@dbwebb.se      
```                                                            
