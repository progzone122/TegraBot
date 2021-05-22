<?php
$config_file = parse_ini_file('config.ini');
define('token', $config_file['token']);
$default_status = 0;

if ($config_file['status'] == 1) {
  $data = json_decode(file_get_contents('php://input'), true);
  file_put_contents('file.txt', '$data: ' . print_r($data, 1) . '\n', FILE_APPEND); //Записываем в файл
  $message = mb_strtolower($data['message']['text'], 'UTF-8'); //Переобразуем и запишем сообщение в нижний регистр
  //
  function sendMessage($request_message, $response_message, $e = ''){
    global $data;
    global $message;
    global $default_status;

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
        $default_status = 0;
        exit;
      default:
        $default_status = 1;
    }
}
  function sendPhoto($request_message, $photo_url, $e = ''){
    global $data;
    global $message;
    global $default_status;

    switch ($message) {
      case $request_message:
        $params = [
          'chat_id' => $data['message']['chat']['id'],
          'photo' => $photo_url
        ];
        file_get_contents('https://api.telegram.org/bot' . token . '/sendPhoto?' . http_build_query($params));
        if($e != ''){
          eval($e); //Выполнение php кода пользователя
        }
        $default_status = 0;
        exit;
      default:
        $default_status = 1;
  }
}
function sendVideo($request_message, $video_url, $e = ''){
  global $data;
  global $message;
  global $default_status;

  switch ($message) {
    case $request_message:
      $params = [
        'chat_id' => $data['message']['chat']['id'],
        'video' => $video_url
      ];
      file_get_contents('https://api.telegram.org/bot' . token . '/sendVideo?' . http_build_query($params));
      if($e != ''){
        eval($e); //Выполнение php кода пользователя
      }
      $default_status = 0;
      exit;
    default:
      $default_status = 1;
}
}
  function defaultMessage($default_message){
    global $data;
    global $message;
    global $default_status;

    if($default_status == 1){
      if($data['message']['chat']['type'] == 'private'){
        $params = [
          'chat_id' => $data['message']['chat']['id'],
          'text' => $default_message
        ];
        file_get_contents('https://api.telegram.org/bot' . token . '/sendMessage?' . http_build_query($params));
        $default_status = 0;
      }
    }
  }
  echo 'Status: Working';
  //
}elseif($config_file['status'] == 0){
  echo "<script>alert('Error! Bot status is disabled. Configure bot via config.ini and do initial setup via connect.php');</script>";
  echo 'Status: No working';
  exit;
}else{
  echo "<script>alert('Error! Please, check correct settings file config.ini');</script>";
  echo 'Status: No working';
  exit;
}
?>
