<?php

namespace Builder\Parts;

 /**
  * 公共模块
  */
 trait PartsTrait
 {
     public function create($title = '')
     {
         return '正在创建' . $title . '...' . "\n";
     }
 }
