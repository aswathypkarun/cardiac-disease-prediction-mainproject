<?php
session_start();
  session_destroy();
  header("location:../health-lab/index.php");
?>