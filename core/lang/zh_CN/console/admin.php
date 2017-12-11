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

    'page' => array(
        'add'       => '创建', //创建
        'edit'      => '编辑', //编辑
        'show'      => '查看',
        'auth'      => '授权', //授权
    ),

    /*------链接文字------*/
    'href' => array(
        'add'       => '创建', //创建
        'edit'      => '编辑', //编辑
        'auth'      => '授权',
        'show'      => '查看',
        'toGroup'   => '加入组', //加入组
        'help'      => '帮助',
    ),

    /*------说明文字------*/
    'label' => array(
        'id'              => 'ID', //ID
        'all'             => '全部',
        'key'             => '关键词', //关键词
        'allow'           => '权限',

        'admin'           => '管理员', //管理员
        'adminUnknow'     => '未知管理员，建议删除',
        'onlyModi'        => '需要修改时输入', //需要修改时输入
        'nick'            => '昵称',
        'note'            => '备注',
        'status'          => '状态',
        'type'            => '类型',
        'none'            => '无',
        'username'        => '用户名', //用户名
        'password'        => '密码', //密码
        'profileAllow'    => '个人权限',
        'forbidModi'      => '禁止修改',

        'mail'            => '邮箱',
    ),

    'allow' => array(
        'add'     => '创建',
        'edit'    => '编辑',
        'del'     => '删除',
        'approve' => '审核',
    ),

    'status' => array(
        'enable'  => '启用', //发布
        'disable' => '禁用', //隐藏
    ),

    'type' => array(
        'normal'   => '普通管理员', //简体中文
        'super'    => '超级管理员', //英语
    ),

    'option' => array(
        'allStatus' => '所有状态', //所有
        'allType'   => '所有类型', //所有
        'batch'     => '批量操作', //批量操作
        'del'       => '永久删除', //删除
    ),

    /*------按钮------*/
    'btn' => array(
        'submit'      => '提交', //提交
        'save'        => '保存', //提交
    ),

    /*------确认框------*/
    'confirm' => array(
        'del'         => '确认永久删除吗？此操作不可恢复！', //确认清空回收站
    ),
);
