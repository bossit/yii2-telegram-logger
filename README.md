# yii2-telegram-logger

Push the message in Telegram channel.

[![Latest Stable Version](https://poser.pugx.org/bossit/yii2-telegram-logger/v/stable)](https://packagist.org/packages/bossit/yii2-telegram-logger)
[![Build Status](https://travis-ci.org/bossit/yii2-telegram-logger.svg?branch=master)](https://travis-ci.org/bossit/yii2-telegram-logger)
[![Total Downloads](https://poser.pugx.org/bossit/yii2-telegram-logger/downloads)](https://packagist.org/packages/bossit/yii2-telegram-logger)

## Install

The preferred way to install this component is through [composer](https://getcomposer.org/download/).

```
$ composer require bossit/yii2-telegram-logger:^1.0  
```

## Usage

The preferred way is to setup the components into our Application's configuration array:

```php
'components' => [
    'telegramLogger' => [
        'class'     => \bossit\logger\TelegramService::class,
        'botKey'    => 'xxx:zzz',
        'botName'   => 'YouNameBot',
        'channelId' => '-100xxx'
    ],
],
```

That's it, you are ready to use them as Yii2 components.

##### Send a message to channel:
```php
\Yii::$app->telegramLogger->push('Hello, %username%!');
```

##### Send a message with title to channel:

```php
\Yii::$app->telegramLogger->push('Hello, %username%!', 'Authorization');
```