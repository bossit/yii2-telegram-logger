<?php

namespace bossit\logger;

use yii\base\Component;

class TelegramService extends Component
{
    public function push(string $message) : string
    {
        return sprintf('We send: %s', $message);
    }
}