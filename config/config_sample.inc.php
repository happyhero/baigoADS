<?php
define('BG_DEBUG_SYS', 0);
define('BG_DEBUG_DB', 0);
define('BG_SWITCH_LANG', 0);
define('BG_SWITCH_UI', 0);
define('BG_SWITCH_TOKEN', 1);
define('BG_SWITCH_SMARTY_DEBUG', 0);
define('BG_DEFAULT_SESSION', 1200);
define('BG_DEFAULT_PERPAGE', 30);
define('BG_DEFAULT_LANG', 'zh_CN');
define('BG_DEFAULT_UI', 'default');
define('BG_DEFAULT_TOKEN_RELOAD', 1 * 60 * 1000);
define('BG_NAME_CACHE', 'cache');
define('BG_NAME_TPL', 'tpl');
define('BG_NAME_MEDIA', 'media');
define('BG_NAME_SSO', 'sso');
define('BG_NAME_HELP', 'help');
define('BG_NAME_CORE', 'core');
define('BG_NAME_MODULE', 'module');
define('BG_NAME_MODEL', 'model');
define('BG_NAME_CONTROL', 'control');
define('BG_NAME_INC', 'inc');
define('BG_NAME_LANG', 'lang');
define('BG_NAME_CLASS', 'class');
define('BG_NAME_FUNC', 'func');
define('BG_NAME_FONT', 'font');
define('BG_NAME_CONSOLE', 'console');
define('BG_NAME_ADVERT', 'advert');
define('BG_NAME_INSTALL', 'install');
define('BG_NAME_API', 'api');
define('BG_NAME_STATIC', 'static');
define('BG_PATH_ROOT', realpath(__DIR__ . '/../') . DS);
define('BG_PATH_HELP', BG_PATH_ROOT . BG_NAME_HELP . DS);
define('BG_PATH_CACHE', BG_PATH_ROOT . BG_NAME_CACHE . DS);
define('BG_PATH_TPL', BG_PATH_ROOT . BG_NAME_TPL . DS);
define('BG_PATH_MEDIA', BG_PATH_ROOT . BG_NAME_MEDIA . DS);
define('BG_PATH_SSO', BG_PATH_ROOT . BG_NAME_SSO . DS);
define('BG_PATH_ADVERT', BG_PATH_ROOT . BG_NAME_ADVERT . DS);
define('BG_PATH_CORE', BG_PATH_ROOT . BG_NAME_CORE . DS);
define('BG_PATH_MODULE', BG_PATH_CORE . BG_NAME_MODULE . DS);
define('BG_PATH_CONTROL', BG_PATH_CORE . BG_NAME_CONTROL . DS);
define('BG_PATH_MODEL', BG_PATH_CORE . BG_NAME_MODEL . DS);
define('BG_PATH_FONT', BG_PATH_CORE . BG_NAME_FONT . DS);
define('BG_PATH_INC', BG_PATH_CORE . BG_NAME_INC . DS);
define('BG_PATH_LANG', BG_PATH_CORE . BG_NAME_LANG . DS);
define('BG_PATH_CLASS', BG_PATH_CORE . BG_NAME_CLASS . DS);
define('BG_PATH_FUNC', BG_PATH_CORE . BG_NAME_FUNC . DS);
define('BG_PATH_TPLSYS', BG_PATH_CORE . BG_NAME_TPL . DS);
define('BG_URL_ROOT', str_ireplace(DS, '/', str_ireplace($_SERVER['DOCUMENT_ROOT'], '', BG_PATH_ROOT)));
define('BG_URL_HELP', BG_URL_ROOT . BG_NAME_HELP . '/');
define('BG_URL_CONSOLE', BG_URL_ROOT . BG_NAME_CONSOLE . '/');
define('BG_URL_ADVERT', BG_URL_ROOT . BG_NAME_ADVERT . '/');
define('BG_URL_MEDIA', BG_URL_ROOT . BG_NAME_MEDIA . '/');
define('BG_URL_SSO', BG_URL_ROOT . BG_NAME_SSO . '/');
define('BG_URL_INSTALL', BG_URL_ROOT . BG_NAME_INSTALL . '/');
define('BG_URL_API', BG_URL_ROOT . BG_NAME_API . '/');
define('BG_URL_STATIC', BG_URL_ROOT . BG_NAME_STATIC . '/');