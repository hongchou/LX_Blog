<?php
/**
 * 本地开发服务器配置文件.
 * Created by PhpStorm.
 * User: lane
 * Date: 14-1-5
 * Time: 下午4:44
 * Blog http://www.lanecn.com
 */

//memcahce 配置项
define('MC_HOST', '127.0.0.1');
define('MC_PORT', '11211');
define('MEMCACHE_PRE', PROJECT_NAME . '_' . WEB_SERVER . '_');

//队列配置项
define('QUEUE_REDIS_DB', 6);
define('QUEUE_PRE', PROJECT_NAME . '_queues_');

//redis配置项
define('REDIS_DB', 6);
define('REDIS_HOST', '127.0.0.1');
define('REDIS_PORT', '6379');
define('REDIS_AUTH', 'hello.redis');
define('REDIS_PRE', PROJECT_NAME . '_' . WEB_SERVER . '_');

//数据库配置定义
define('DEFAULT_DB', 'blog');

//主从类数据库配置信息
$DATABASE = array(
	DEFAULT_DB => array(
		'master' => array(
            'host' => '127.0.0.1',
            'user' => 'lane',
            'password' => '123456',
			'port' => 3306,
			'db' => DEFAULT_DB,
		),
		'slave' => array(
			array(
                'host' => '127.0.0.1',
                'user' => 'lane',
                'password' => '123456',
				'port' => 3306,
				'db' => DEFAULT_DB,
			),
		),
	),
);
