<?php
$config_file = parse_ini_file('config.ini');
if ($config_file['status'] == 1) {

} elseif($config_file['status'] == 0){
  echo "<script>alert('Error! Bot status is disabled. Configure bot via config.ini and do initial setup via connect.php');</script>";
  exit;
}else{
  echo "<script>alert('Error! Please, check correct settings file config.ini');</script>";
  exit;
}
?>
