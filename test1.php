<?php
/**
 * Created by PhpStorm.
 * User: lixiangyang
 * Date: 16/6/29
 * Time: 21:50
 */

$routingkey = 'key3';
$exchangeName = 'exchange3';
$qName = 'queue3';
//设置你的连接
$conn_args = array('host' => 'localhost', 'port' => '5672', 'login' => 'guest', 'password' => 'guest');
$conn = new AMQPConnection($conn_args);
$conn->connect();
//设置queue名称，使用exchange，绑定routingkey
$channel = new AMQPChannel($conn);
$q = new AMQPQueue($channel);
$q->setName($qName);
$q->setFlags(AMQP_DURABLE);
$q->declareQueue();
$q->bind($exchangeName, $routingkey);
//消息获取
$count = 0;
while(true) {
    $messages = $q->get(AMQP_AUTOACK);
    if($messages) {
        var_dump($messages);
        //echo file_get_contents('http://api.zizaike.com/index/discovery?page=1&multilang=12');
    }
}
$conn->disconnect();
?>