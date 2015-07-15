# Setting apache virtual host

## Ubuntu

Assuming you are setting host for url `http://zf1.notejam.dev` in apache.

Please note, installing Apache, MySQL, PHP and PhpMyAdmin is out of scope of these documents. You can find many tutorials on internet to set them up. just google `Setting LAMP on ubuntu`.

### Setting hosts

Open file `/etc/hosts` as super user

``` bash
sudo vim /etc/hosts
```

and add following line at the end

``` bash
120.0.0.1    zf1.notejam.dev
```

### Setting virtual hosts

- Copy example `000-default.conf` to `zf1.notejam.dev.conf`.

``` bash
cd /etc/apache2/sites-available
sudo cp 000-default.conf zf1.notejam.dev.conf
```

- Edit zf1.notejam.dev.conf to look as follow

``` xml
<VirtualHost *:80>
    ServerAdmin kapshainfo@gmail.com
    ServerName zf1.notejam.dev
    DocumentRoot /home/kapilsharma/dev/github/notejam/zendframework1/notejam/public

    <Directory /home/kapilsharma/dev/github/notejam/zendframework1/notejam/public/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/zf1.notejam.error.log
    CustomLog ${APACHE_LOG_DIR}/zf1.notejam.access.log combined

</VirtualHost>
```

WARNING: Please update paths as per your system. 

- Enable new site, reload and restart apache

``` bash
sudo a2ensite zf1.notejam.dev.conf
sudo service apache2 reload
sudo service apache2 restart
```

- Open browser and go to `zf1.notejam.dev`. You are up and running. Go ahead and browse the code. Don't forget to go through tests.