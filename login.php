<?php
  header('Content-Type: text/html; charset=UTF-8');
  $info = file_get_contents('./users.json');
  $info_arr = json_decode($info,true);
  $username = $_POST['name'];
  $password = $_POST['password'];
  $flag = false;
  foreach($info_arr as $key=>$val){
    if($username == $val['email'] && $password == $val['password']){
      echo '登陆成功';
      setcookie('is_login',1,time()+3600*24*7);
      $flag = true;
      break;
    }
  }
  if($flag){
    header('Refresh: 2; url=index.php');
  }else{
    echo '登陆失败';
    header('Refresh: 2; url=login.html');
  }
