<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined('IN_BAIGO')) {
    exit('Access Denied');
}

$arr_set = array(
    'base'          => true,
    'ssin'          => true,
    'db'            => true,
);
$obj_runtime->run($arr_set);

$ctrl_pm = new CONTROL_CONSOLE_UI_PM();

switch ($GLOBALS['route']['bg_act']) {
    case 'send':
        $ctrl_pm->ctrl_send();
    break;

    case 'show':
        $ctrl_pm->ctrl_show();
    break;

    default:
        $ctrl_pm->ctrl_list();
    break;
}
