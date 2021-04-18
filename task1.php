<?php
  $str = $_GET['text'];
  if (empty($str))
  {
    echo "Wrong input";
    return;
  }
  $str = str_replace("  ", " ", $str);
  $result = trim($str);
  echo $result;    
?>