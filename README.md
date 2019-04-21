# Laundry Seeker
### Proyek ini adalah Proyek Tugas Akhir RPL Lab 2 (Senin) dan Basis Data Lab 1 (Senin)

Laundry Seeker adalah aplikasi yang dapat membantu Pelanggan (Pencari jasa
laundry) dalam memudahkan mereka mengakses jasa laundry dan mengetahui status pekerjaan laundry mereka.

### Anggota  

Project Manager 

1. Amin Elhan ([@aminelhanipb](https://github.com/aminelhanipb))

Front End dan Design

1. Yasmin Salamah ([@yasminda19](https://github.com/yasminda19))

Back End

1. Usman Abdul Halim ([@zeroload](https://github.com/zeroload)]
2. Rafie Abdulrahman ([@rathief](https://github.com/Rathief)]

# Our Features!
| Pelanggan | Pemilik Laundry |
| ---------- | ---------------- |
| 1. Browse Laundry Sesuai Lokasi. | 1. Mencatat Progress Kerja.  |
| 2. Melihat Progress pekerjaan laundry | 2. Browse Laundry Sesuai Lokasi
| 3. Melihat Informasi Laundry. | 3. Melihat History Pengerjaan

### Installation

Laundry Seeker menggunakan teknologi Laravel. Untuk menggunakan laravel yang kalian butuhkan adalah untuk menginstall Apache,Composer dan laravel.

How to Install on UBUNTU :

1. installing Apache
```sh
$ sudo add-apt-repository ppa:ondrej/php
$ sudo apt-get update
$ sudo apt-get install apache2 libapache2-mod-php7.2 php7.2 php7.2-xml php7.2-g
$ php7.2-opcache php7.2-mbstring
```

2. installing laravel

```sh
$ cd /tmp
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ cd /var/www/html
$ sudo composer create-project laravel/laravel your-project --prefer-dist
```

3. Configuring your host
```sh
$ sudo chgrp -R www-data /var/www/html/your-project
$ sudo chmod -R 775 /var/www/html/your-project/storage
$ cd /etc/apache2/sites-available
$ sudo nano laravel.conf
```

4. config.php
```php
<VirtualHost *:80>
    ServerName yourdomain.tld

    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/your-project/public

    <Directory /var/www/html/your-project>
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

5. setelah memodifikasi config
```sh
$ sudo a2dissite 000-default.conf
$ sudo a2ensite laravel.conf
$ sudo a2enmod rewrite
$ sudo service apache2 restart
```

6. Lalu buka browser kemudian type

Ini merupakan localHost kalian
```
http://192.168.1.100
```
