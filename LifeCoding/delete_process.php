<?php
  unlink('data/'.$_POST['id']);
  header('Location: /LifeCoding/index.php');
?>