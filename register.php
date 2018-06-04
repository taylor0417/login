<?php
  header('Content-Type: text/html; charset=UTF-8');
  //如果没有json文件则创建json并写入一个空数组
  if(!is_file('./users.json')){
    file_put_contents('./users.json','[]');
  }
  $info = file_get_contents('./users.json');
  //将json文件的内容转换成数组形式
  $info_arr = json_decode($info);
  array_push($info_arr,$_POST);
  $json = json_encode($info_arr);
  file_put_contents('./users.json',$json);
  echo '注册成功';
  header('Refresh: 2; url=index.html');
