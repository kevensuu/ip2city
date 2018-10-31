<?php
require_once __DIR__ . '/vendor/autoload.php';

use Ip2city\Info;


/*
 *
  成功返回结果示例:
  array(3) {
    [0]=>
        string(6) "韩国"
    [1]=>
        string(6) "韩国"
    [2]=>
        string(0) ""
  }

  失败返回: 空数组
*/
var_dump(Info::show('116.33.153.65'));