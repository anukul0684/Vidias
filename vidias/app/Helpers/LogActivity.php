<?php


namespace App\Helpers;
use Request;
use App\Models\LogActivity as LogActivityModel;


class LogActivity
{


    public static function addToLog()
    {
        date_default_timezone_set("Canada/Central");
        $date = date("Y-m-d h:i:s");
        $method = $_SERVER['REQUEST_METHOD'];
        $page = $_SERVER['PHP_SELF'];
        $status = http_response_code();
        $useragent = $_SERVER['HTTP_USER_AGENT'];

        $evt_string = $date . ' | ' . $method . ' | ' . $page . ' | ' . $status . ' | ' . $useragent;

        $log = [];
        $log['event'] = $evt_string;
        LogActivityModel::create($log);
    }

    public static function logActivityLists()
    {
        return LogActivityModel::latest()->get();
    }


}