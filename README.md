# cake2.10_redshift_test
cake2系でaws redshift接続テスト

# build 
```
docker-compose up --build -d
```

### 以下コンテナ内サーバーにて
```
#追加　/etc/httpd/conf/httpd.conf
DocumentRoot "/var/www/html/vendors/cakephp/cakephp"
```

```
#pgsql
yum --enablerepo=remi-php56 install php-pdo php-pgsql
```
