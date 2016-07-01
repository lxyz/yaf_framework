# yaf_framework
##框架结构
    框架基于yaf扩展，可以到php.net中查看相关api， 文档(http://www.laruence.com/manual/)

框架依赖
    yaf(mvc)
    pdo(数据库扩展)
    redis(redis扩展)
    amqp(基于amqp协议的消息队列如rabbitMQ)
    基于composer管理的依赖代码包
        如monolog(日志), modoo(数据库类)

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

         application.ini(配置文件, 代码相关配置)
         composer.json(第三方代码包依赖)
