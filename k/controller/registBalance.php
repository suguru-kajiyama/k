<?php
  $category=$_POST["category"];
  $date=$_POST["date"];
  $inOut=$_POST["inout"];
  $money=$_POST["money"];

  require("../model/balance.php");
  registBalance($category,$date,$inOut,$money);
 ?>
