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
    `git clone https://github.com/managanemeke/nagakama`  
    `cd nagakama`  
    `cp nagakama.ru /etc/nginx/sites-available/nagakama.ru`  
    `cd /etc/nginx/sites-enabled/`  
    `ln -s /etc/nginx/sites-available/nagakama.ru`  
    `rm /etc/nginx/sites-enabled/default`

- `cd ~`  
    `cp -r nagakama/ /var/www/nagakama/`  
    `rm /var/www/nagakama/nagakama.conf`  
    `rm /var/www/nagakama/nagakama.ru`

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