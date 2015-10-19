<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
	exit("Access Denied");
}

/*-------------------------权限-------------------------*/
return array(
	/*------用户------*/
	"user" => array(
		"title" => "用户",
		"allow" => array(
			"reg"        => "注册",
			"login"      => "登录",
			"get"        => "读取",
			"edit"       => "编辑",
			"del"        => "删除",
			"global"     => "操作所有用户",
			"chkname"    => "验证用户名",
			"chkmail"    => "验证 E-mail",
		),
	),

	/*------密文------*/
	"code" => array(
		"title" => "密文",
		"allow" => array(
			"encode"     => "加密",
			"decode"     => "解密",
		),
	),

	/*------签名------*/
	"signature" => array(
		"title" => "签名",
		"allow" => array(
			"signature"  => "生成签名",
			"verify"     => "验证签名",
		),
	),
);
