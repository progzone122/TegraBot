<?php
$config_file = parse_ini_file('config.ini');
define('token', $config_file['token']);

if ($config_file['status'] == 1) {
  $data = json_decode(file_get_contents('php://input'), true);
  file_put_contents('file.txt', '$data: ' . print_r($data, 1) . '\n', FILE_APPEND); //Записываем в файл
  $message = mb_strtolower($data['message']['text'], 'UTF-8'); //Переобразуем и запишем сообщение в нижний регистр
  //
  function sendMessage($request_message, $response_message, $e = ''){
    global $data;
    global $message;
    global $default_message;

    switch($message){
      case $request_message:
        $params = [
          'chat_id' => $data['message']['chat']['id'],
          'text' => $response_message
        ];
        file_get_contents('https://api.telegram.org/bot' . token . '/sendMessage?' . http_build_query($params));
        if($e != ''){
          eval($e); //Выполнение php кода пользователя
        }
        break;

      default:
      if($default != ''){
        $params = [
          'chat_id' => $data['message']['chat']['id'],
          'text' => $default_message
        ];
        file_get_contents('https://api.telegram.org/bot' . token . '/sendMessage?' . http_build_query($params));
      }
    }
  }
  //
} elseif($config_file['status'] == 0){
  echo "<script>alert('Error! Bot status is disabled. Configure bot via config.ini and do initial setup via connect.php');</script>";
  exit;
}else{
  echo "<script>alert('Error! Please, check correct settings file config.ini');</script>";
  exit;
}
?>
