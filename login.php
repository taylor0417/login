<?php
  var_dump($_POST['check']);
  header('Content-Type: text/html; charset=UTF-8');
  $info = file_get_contents('./users.json');
  $info_arr = json_decode($info,true);
  $username = $_POST['name'];
  $password = $_POST['password'];
  foreach($info_arr as $key=>$val){
    if($username == $val['email'] && $password == $val['password']){
      echo '登陆成功';
      header('Refresh: 2; url=index.html');
    }else{
      echo '输入有误';
    }
  }
