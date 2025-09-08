<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/news/theme-(\\d+)/page-(\\d+)/$#',
    'RULE' => 'theme=$1&PAGEN_2=$2',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/news/theme-(\\d+)/$#',
    'RULE' => 'theme=$1',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/news/page-(\\d+)/$#',
    'RULE' => 'PAGEN_1=$1',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/news/(\\d+)/$#',
    'RULE' => 'ID=$1',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
);
