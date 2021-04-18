<?php
  if (!$_GET['text'])
  {
    echo "Incorrected parametr";
    return;
  }
  $numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
  $str = $_GET['text'];
  $First = $str[0];
  if (in_array($First, $numbers))
    {
      echo "No, can't start on number";
    }
  else
    {
      echo "Yes";
    } 
?>