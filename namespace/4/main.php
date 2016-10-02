<?php
namespace namespacename;
/*
  +----------------------------------------------------------------------+
  | Advanced PHP|
  +----------------------------------------------------------------------+
  | Copyright (c) 2016-2016 The PHP Group                                |
  +----------------------------------------------------------------------+
  | This source file is subject to version 3.01 of the PHP license,      |
  | that is bundled with this package in the file LICENSE, and is        |
  | available through the world-wide-web at the following url:           |
  | http://www.php.net/license/3_01.txt                                  |
  | If you did not receive a copy of the PHP license and are unable to   |
  | obtain it through the world-wide-web, please send a note to          |
  | license@php.net so we can mail you a copy immediately.               |
  +----------------------------------------------------------------------+
  | Author:  Yongtao Pang <pytonic@foxmail.com>                            |
  +----------------------------------------------------------------------+
*/
class classname{
	function __construct(){
		echo __METHOD__ . "\n";	
	}
}

function funcname(){
	echo __FUNCTION__ . "\n";	
}

const constname = "namespacenamed";

include "namespace.php";

$a = 'classname';
$obj = new $a;
$b = 'funcname';
$b();
echo constant('constname') . "\n";

$a = 'namespacename\classname';
$obj = new $a;
$a = '\namespacename\classname';
$obj = new $a;

$b = 'namespacename\funcname';
$b();
$b = '\namespacename\funcname';
$b();

echo constant('namespacename\constname') . "\n";
echo constant('\namespacename\constname') . "\n";





/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */

