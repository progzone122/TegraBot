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
  1.send($request_message, $response_message, $e(Optional)); - send text messages
    $request_message (String) - Message that will trigger the bot
    $response_message (String) - The message that the bot will send
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
  1. send($request_message, $response_message, $e(Optional)); - Отправка текстовых сообщений
    $request_message (String) - Сообщение, при котором сработает бот
    $response_message (String) - Сообщение, которое отправит бот
    $e (String, Optional) - Выполнение пользовательского php кода после отправки сообщения
    Примеры:
      1. send('/start', 'Hello!');
      2. send('/start', 'Hello!', "echo 'Hello world!;'")
Дополнительные переменные TegraBot:
  1. $default_message - Стандартное сообщение бота, если он не смог распознать команду
