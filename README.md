# yii2-telegram-logger

Push the message in Telegram channel.

## Usage

The preferred way is to setup the components into our Application's configuration array:

```php
'components' => [
    'myLogger' => [
        'class'     => \bossit\logger\TelegramService::class,
        'botKey'    => 'xxx:zzz',
        'botName'   => 'YouNameBot',
        'channelId' => '-100xxx'
    ],
],
```

That's it, you are ready to use them as Yii2 components.

Send a message to chanel:
```php
\Yii::$app->myLogger->push('Hello, %username%!');
```