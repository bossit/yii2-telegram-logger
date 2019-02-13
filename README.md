# yii2-telegram-logger

Push the message in Telegram channel.

## Install

The preferred way to install this component is through [composer](https://getcomposer.org/download/).

```
$ composer require bossit/yii2-telegram-logger:^1.0  
```

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