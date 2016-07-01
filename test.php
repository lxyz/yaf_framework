<?php
/**
 * Created by PhpStorm.
 * User: lixiangyang
 * Date: 16/6/29
 * Time: 21:50
 */

$routingkey='key3';
$exchangeName = 'exchange3';

//设置你的连接
$conn_args = array('host' => 'localhost', 'port' => '5672', 'login' => 'guest', 'password' => 'guest');
$conn = new AMQPConnection($conn_args);
if ($conn->connect()) {
    echo "Established a connection to the broker \n";
} else {
    echo "Cannot connect to the broker \n ";
}

$channel = new AMQPChannel($conn);
$exchage = new AMQPExchange($channel);
$exchage->setName($exchangeName);//创建名字
$exchage->setType(AMQP_EX_TYPE_DIRECT);
$exchage->setFlags(AMQP_DURABLE);
$exchage->declareExchange();
foreach(range(0, 0) as $v) {
    $exchage->publish('hello world', $routingkey);
}

