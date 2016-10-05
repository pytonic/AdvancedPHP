<?php
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
namespace pytonic;
use My\Full\Classname as AnotherClassname;

use My\Full\NSname;

use ArrayObject;


//(PHP 5.6+)
use function My\Full\functionName;

//(PHP 5.6+)
use function My\Full\functionName as func;

//(PHP 5.6+)
use const My\Full\CONSTANT;


$obj = new namespace\AnotherClassname; 
$obj = new AnotherClassname; 
My\Full\functionName();
func();
echo CONSTANT;


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 fdm=marker
 * vim<600: noet sw=4 ts=4
 */
