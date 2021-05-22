EN:
I. Initial setup
For the initial setup of the bot, you need to bind the webhook to the host, configure config.ini by entering:
  1. Token API of the bot (You can get it here - https://t.me/BotFather)
  2. Link to the host where the bot will be launched
P.S. The bot won't work without a reliable https certificate!
II. Features of TegraBot
To use TegraBot, you need to write code in index.php, or in index.php, include other files and write the code already there:
  include file1.php;
  include file2.php;
  include file3.php;
III. Using TegraBot
TegraBot connection:
  include tegrabot.php;
TegraBot functions:
  1.sendMessage($request_message, $response_message, $e(Optional)); - Sending text messages
    $request_message (String) - Message that will trigger the bot
    $response_message (String) - The message that the bot will send
    $e (String, Optional) - Execute custom php code after sending message
    Examples:
      1. sendMessage('/start', 'Hello!');
      2. sendMessage('/start', 'Hello!', 'function_1();')
2. sendPhoto($request_message, $photo_url, $e(Optional)); - Sending images
  $request_message (String) - Message that will trigger the bot
  $photo_url (String) - The image that the bot will send
  $e (String, Optional) - Execute custom php code after sending message
  Примеры:
    sendPhoto('testphoto', 'https://yt3.ggpht.com/yti/ANoDKi4MFxMBb5KrloiKZJVZn04TgGu1HBIj4fL_12FALQ=s88-c-k-c0x00ffffff-no-rj-mo');

3. sendVideo($request_message, $video_url, $e(Optional)) - Sending videos
  $request_message (String) - Message that will trigger the bot
  $video_url (String) - The video that the bot will send
  $e (String, Optional) - Execute custom php code after sending message
Optional TegraBot variables:
  1. $default_message - Standard message of the bot if it could not recognize the command
RU:
I. Первоначальная настройка
Для первоначальной настройки бота необходимо привязать вебхук к хосту, настроить config.ini, введя:
  1. Token API бота (Вы можете получить его здесь - https://t.me/BotFather)
  2. Ссылка на хост, на котором будет запускаться бот
P.S. Бот не будет работать без надёжного сертификата https!
II. Особенности TegraBot
Чтобы использовать TegraBot нужно писать код обязатеьно в index.php, ну или в index.php подключать другие файлы и писать код уже там:
  include file1.php;
  include file2.php;
  include file3.php;
III. Использование TegraBot
Подключение TegraBot:
  include tegrabot.php;
Функции TegraBot:
  1. sendMessage($request_message, $response_message, $e(Optional)); - Отправка текстовых сообщений
    $request_message (String) - Сообщение, при котором сработает бот
    $response_message (String) - Сообщение, которое отправит бот
    $e (String, Optional) - Выполнение пользовательского php кода после отправки сообщения
    Примеры:
      1. sendMessage('/start', 'Hello!');
      2. sendMessage('/start', 'Hello!', 'function_1();')

  2. sendPhoto($request_message, $photo_url, $e(Optional)); - Отправка изображений
    $request_message (String) - Сообщение, при котором сработает бот
    $photo_url (String) - Изображение, которое отправит бот  
    $e (String, Optional) - Выполнение пользовательского php кода после отправки сообщения
    Примеры:
      sendPhoto('testphoto', 'https://yt3.ggpht.com/yti/ANoDKi4MFxMBb5KrloiKZJVZn04TgGu1HBIj4fL_12FALQ=s88-c-k-c0x00ffffff-no-rj-mo');

  3. sendVideo($request_message, $video_url, $e(Optional)) - Отправка видео
    $request_message (String) - Сообщение, при котором сработает бот
    $video_url (String) - Видео, которое отправит бот  
    $e (String, Optional) - Выполнение пользовательского php кода после отправки сообщения
Дополнительные переменные TegraBot:
  1. $default_message - Стандартное сообщение бота, если он не смог распознать команду
