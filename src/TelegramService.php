<?php

namespace bossit\logger;

use yii\base\Component;

class TelegramService extends Component
{
    public static function push(string $message) : string
    {
        return $message;
    }
}