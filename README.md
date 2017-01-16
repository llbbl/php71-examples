# php71-examples


Right now only way to get 7.1 is via PPA. 

https://launchpad.net/~ondrej/+archive/ubuntu/php


```
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
```

Make sure packages are available:

```
sudo apt-cache search php7.1
```


##Install php 7.1

```
sudo apt install php7.1 php7.1-fpm php7.1-cli php7.1-mcrypt php7.1-mysql php7.1-curl php7.1-json php7.1-gd php7.1-mbstring php7.1-xml php7.1-zip 
```

Don't forget optionally add xdebug

```
php7.1-xdebug
```

### new features in 7.1

http://php.net/manual/en/migration71.new-features.php

### new features in 7.0

http://php.net/manual/en/migration70.new-features.php

http://blog.teamtreehouse.com/5-new-features-php-7


