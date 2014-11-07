RESTful Web Services implementation with Yii 2
================================

RESTful Web Services implementation example with Yii 2.

You can then access the application through the following URL:

~~~
http://localhost/yii2-webservice/web/index.php?r=jobs
~~~


### Import sample database sql script.

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2_webservice',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

For more information, please take a look <a href="http://www.yiiframework.com/doc-2.0/guide-rest-quick-start.html" target="_blank">http://www.yiiframework.com/doc-2.0/guide-rest-quick-start.html</a>
