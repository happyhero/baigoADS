<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined('IN_BAIGO')) {
    exit('Access Denied');
}

/*-------------------------通用-------------------------*/
return array(
    /*------页面标题------*/
    'page' => array(
        'confirm'   => '激活用户',
        'verify'    => '验证',
    ),

    /*------说明文字------*/
    'label' => array(
        'username'  => '用户名',
        'seccode'   => '验证码',
    ),

    /*------按钮------*/
    'btn' => array(
        'submit'    => '提交',
        'seccode'   => '看不清',
    ),

);
