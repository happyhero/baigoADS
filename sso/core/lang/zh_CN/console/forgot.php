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
        'forgot' => '找回密码',
    ),

    /*------链接文字------*/
    'href' => array(
        'login' => '直接登录',
    ),

    /*------说明文字------*/
    'label' => array(
        'username'      => '用户名',
        'password'      => '密码',
        'answer'        => '回答',
        'passNew'       => '新密码',
        'passConfirm'   => '确认密码',
        'seccode'       => '验证码',
    ),

    /*------按钮------*/
    'btn' => array(
        'next'  => '下一步',
        'submit'    => '提交',
        'seccode'   => '看不清',
    ),

    'text' => array(
        'forgotByMail'    => '选择此方式找回密码，系统将向您预留的邮箱发送确认邮件。',
    ),
);
