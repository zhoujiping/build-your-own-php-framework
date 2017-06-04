# 论PHP框架是如何诞生的代码

文章地址： http://www.zhoujiping.com/php/build-your-own-php-framework/ 

## 分支说明及文章对应代码阅读说明

一共有5个分支：

```bash

     `the_first_refactoring` -  对应文章中目录： 第一次代码重构
     `the_second_refactoring` -  对应文章中目录： 第二次代码重构
     `the_third_refactoring` -  对应文章中目录： 第三次代码重构
     `the_fourth_refactoring` -  对应文章中目录： 第四次代码重构
      `master`                -  最后完成的代码
```

## 查阅和切换分支

```bash
    # 复制代码
    git clone https://github.com/zhoujiping/my-php-framework.git

    # 切换分支
    git checkout the_first_refactoring
```

## 先创建数据库

使用 Mysql 数据库，创建名为 `todolist` 的数据库，数据库中只有一个表`tasks`, 字段如下：

```bash

    +-------------+------------------+------+-----+---------+----------------+
    | Field       | Type             | Null | Key | Default | Extra          |
    +-------------+------------------+------+-----+---------+----------------+
    | id          | int(11) unsigned | NO   | PRI | NULL    | auto_increment |
    | description | text             | NO   |     | NULL    |                |
    | completed   | tinyint(1)       | NO   |     | NULL    |                |
    +-------------+------------------+------+-----+---------+----------------+
```

## config.php 中的配置

```php

    return [
        'database' => [
            'name'          => 'todolist', // 数据库名
            'username'      => 'root',  // Mysql 登录用户名
            'password'     => 'password', // Mysql 登录密码
            'connection'    => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
     ];
 ```



