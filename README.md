# BibliotecaDigital
1. Download project
https://github.com/piturriagit/BibliotecaDigital/tree/mvcForBooks

2. Create database and fill testing data if necessary
```shell
$ mampphp spark migrate 
$ mampphp spark db:seed TestingBooks
```
3. Open browser with url
http://localhost:8888/bibliotecadigital/public/

## Problems while using MAMP and CodeIgniter
- Lots of files in git due to CRLF in different operative systems. Salvar los cambios que no quiero perder, y luego configurar
```shell
$ git config core.autocrlf true
$git rm --cached -r .
$git reset --hard
```
- redirect index.php from url requests using mamp+codeigniter
include a redirection in nginx.conf before other location configurations
```shell
http {
    server {
		#patri: fix for index.php using codeigniter and mamp
		location /bibliotecadigital/public/ {
 		   index index.php;
    		try_files $uri $uri/ /bibliotecadigital/public/index.php$is_args$args;
		}
    }
}
```
- after 5 clicks on topmenubar nginx timeout loading pages
codeigniter toolbar in developming environment uses too many resources. 
Deactivate hot reload on ci4 toolbar (refresh button, if moving is enabled), you can see http request 
http://localhost:8888/bibliotecadigital/public/index.php/__hot-reload
One option is to reduce keepalive for http requests 
```shell
http {
    server {
		#patri: fix for codeigniter toolbar, which leaves sessions open and consumes nginx worker connections
		keepalive_timeout 2;
    }
}
```
- arrancar servidor web con spark 
```shell
/Applications/MAMP/bin/php/php8.3.30/bin/php spark serve` 
```
https://spark.apache.org/docs/latest/spark-standalone.html
- nginx.conf error 
```shell 
/Applications/MAMP/Library/sbin/nginx -t -c /Applications/MAMP/conf/nginx/nginx.conf
```
- ver sesiones abiertas
```shell
netstat -an | grep 8888
```
- ver puertos usados 
```shell 
lsof -i :8888
```