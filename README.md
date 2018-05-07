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


### DB設定サンプル
```php
class DATABASE_CONFIG {
	public $default = array(
		'datasource' => 'Database/Postgres',
		'persistent' => false,
		'host' => 'v3sample.*********.[region].redshift.amazonaws.com',
		'login' => 'horie',
		'password' => '***********',
		'database' => 'v3sample',
		'prefix' => '',
    'port' => 5439,
    'schema' => 'public',
		//'encoding' => 'utf8',
	);
}
```
