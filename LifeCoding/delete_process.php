<?php
  unlink('data/'.basename($_POST['id']));
  header('Location: /LifeCoding/index.php');
?>