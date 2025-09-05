<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/news/theme-(\d+)/$#',
    'RULE' => 'theme=$1',
    'PATH' => '/news'
  ),
  1 => 
  array (
    'CONDITION' => '#^/news/(\d+)/$#',
    'RULE' => '/news/detail.php?ID=$1',
  )
);
