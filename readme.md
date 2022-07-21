# nagakama

Simple one PHP file site (webapp) for collecting
info about russian metal stores in one plain CSV file.

You can see it in action here:  
http://nagakama.ru

## Golden way installation on Ubuntu 20.04 blank server

### installapps stage

- `apt update`  
    `apt install nginx php7.4 php7.4-fpm git vi wget`

### configapps stage

- `cd /etc/php/7.4/fpm/pool.d`  
    `vi www.conf`  
    **"listen = /run/php/php7.4-fpm.sock"**  
    replace on  
    **"listen = 127.0.0.1:9123"**

- `cd ~`  
    `rm -r nagakama`  
    `git clone https://github.com/managanemeke/nagakama`  
    `cd nagakama`  
    `cp nagakama /etc/nginx/sites-available/nagakama`  
    `cd /etc/nginx/sites-enabled/`  
    `rm nagakama`  
    `ln -s /etc/nginx/sites-available/nagakama`  
    `rm /etc/nginx/sites-enabled/default`

- `cd ~`  
    `rm -r /var/www/nagakama`  
    `cp -r nagakama/ /var/www/nagakama/`  
    `rm /var/www/nagakama/nagakama.conf`  
    `rm /var/www/nagakama/nagakama`  
    `chown -R www-data:www-data /var/www/nagakama`

### startapps stage

- `service php7.4-fpm start`  
    `service nginx start`

### testing stage

- `nginx -v`  
    `nginx -t`  
    `service --status-all`

- `wget http://localhost`  
    `vi index.html`  
    and you will see...

### stoping stage

- `service nginx stop`  
    `service php7.4-fpm stop`

## Golden way installation on Windows 7

### installapps stage

- `md nagakama`  
    `cd nagakama`  
    `certutil -urlcache -split -f "http://managa.ru/nagakama.7z" nagakama.7z`  
    `certutil -urlcache -split -f "http://managa.ru/7za.exe" 7za.exe`  
    `7za x -y -pCMgtdUk1YAvtqBSl0eaAJJcj3TcyHI1ZmTv7j4NoS9jIv6DNvN2MQsmSDANoeOjN nagakama.7z -r`  

### configapps stage

- `cd git`  
    `call post-install.bat`  

### startapps stage

- `git-cmd`  
    `cd ..`  
    `git clone https://github.com/managanemeke/nagakama`  
    `call nagakama_full_start.bat`  
    `cd ..`

### testing stage

- `certutil -urlcache -split -f "http://localhost/" index.html`  
    `type index.html`  
    and you will see...

### stoping stage

- `call nagakama_full_stop.bat`

