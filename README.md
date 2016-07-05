##框架结构

    框架基于yaf扩展，可以到php.net中查看相关api， 文档(http://www.laruence.com/manual/)

框架依赖

    yaf(mvc框架扩展)
    pdo(数据库扩展)
    redis(redis扩展, 可替换)
    amqp(基于amqp协议的消息队列如rabbitMQ， 可替换)
    基于composer管理的依赖代码包,如monolog(日志), medoo(数据库类)

php.ini

    [yaf]
    yaf.environ=test
    yaf.use_namespace=1
    yaf.library=/path/to/zzk-core

api目录结构

     zzk-core(全局类目录)
     zzk-api(api代码目录)
         application
               controllers
               library
               modules
               Bootstrap.php
         public
               index.php(入口文件)
         scripts
               crontab
                    console.php 控制台任务
         tests
         codeception.yml
         application.ini(配置文件, 代码相关配置)
         composer.json(第三方代码包依赖)
         composer.lock
         README.md

nginx server配置

    server {
        listen       80;
        server_name  zzk.dev;
        root /Users/lixiangyang/dev/work/zzk/zzk-api/public;
        index index.php;
        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }
        location ~ \.php$ {
           fastcgi_pass   127.0.0.1:9000;
           # fastcgi_pass unix:/usr/local/var/run/php-cgi.sock;
           fastcgi_index  index.php;
           fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
           include        fastcgi_params;
        }
    }

控制台任务

    控制台任务目录在scripts目录下面， 引导文件是crontab目录下面的console.php
    调用示例/path/to/php scripts/crontab/job.php 将调用job.php文件里job class的main方法

单元测试

    单元测试依赖于codeception测试框架
    创建单元测试文件codecept generate:test unit ExampleDao
    执行单元测试codecept run unit
