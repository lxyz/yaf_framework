<?php
/**
 * Created by PhpStorm.
 * User: lixiangyang
 * Date: 16/6/29
 * Time: 14:23
 */

namespace utils;


class Output
{

    /**
     * 数据以json格式输出
     *
     * @param $data
     * @param string $message
     * @param int $status
     */
    public static function json($data, $message = '', $status = 200)
    {
        header('content-type:application/json');
        $outPutData = [
            'status' => $status,
            'message' => $message,
            'data' => $data
        ];
        echo json_encode($outPutData);
    }
}