<?php
  $config_file = parse_ini_file('config.ini');
  define('token', $config_file['token']);
  define('api', $config_file['api'] . '/index.php');
  $url = 'https://api.telegram.org/bot' . token . '/setwebhook?url=' . api;
  $webhook_info = file_get_contents($url);
  $webhook_info = json_decode($webhook_info, true);

  function get_status($val){
    $arr = file('config.ini');
    foreach ( $arr as $k=>$v ){
      if ( strpos($v,'status',0) !== false ){
        unset($arr[$k]);
        $arr[$k] = 'status = ' . $val;
        }
        file_put_contents( 'config.ini', $arr ); // записываем обратно в файл
      }
    $config_file = parse_ini_file('config.ini');
  }
  function webhook_response($val){
    echo "<!DOCTYPE html>
    <html lang='ru' dir='ltr'>
      <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>" . $val['description'] . "</title>
      </head>
      <body>
        <style>
        body{
          display: flex;
          justify-content: center;
        }
          .info{
            width: 36em;
            height: 12em;
            background-color: #A3A3A3;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
          }
          .info h2{
            color: white;
          }
          #go{
            font-size: 18px;
          }
        </style>
        <div class='info'>
          <h2>" . $val['description'] ."</h2>
          <button type='button' id='go'>Go to index.php</button>
        </div>
      </body>
      <!-- JS files -->
      <script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
      <script>
        $('#go').on('click', function(){
          $(location).attr('href', 'index.php');
        });
      </script>
    </html>";
  }
  if ($webhook_info['description'] == 'Webhook was set'){

  } elseif($webhook_info['description'] == 'Webhook is already set'){

  }else{
    echo 'Error! Please, check correct settings file config.ini';
    get_status(0);
    exit;
  }
  get_status(1);
  webhook_response($webhook_info);
  //
?>
