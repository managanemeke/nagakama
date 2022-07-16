server {
  listen 80;
  server_name nagakama.ru;
  root /var/www/nagakama;
  index nagakama.php;
  location ~ \.php$ {
    fastcgi_pass   127.0.0.1:9123;
    fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
    include        fastcgi_params;
  }
}