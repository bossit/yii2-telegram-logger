<?php

namespace bossit\logger;

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;
use yii\base\Component;

class TelegramService extends Component implements TelegramServiceInterface
{
    /** @var string */
    public $channelId;

    /** @var string */
    public $botName;

    /** @var string */
    public $botKey;

    /** @var string */
    protected $parseMode = 'html';

    /** @var Telegram */
    protected $telegram;

    /**
     * @throws \Longman\TelegramBot\Exception\TelegramException
     */
    public function init()
    {
        parent::init();

        $this->telegram = new Telegram($this->botKey, $this->botName);
    }

    /**
     * @param string $message
     *
     * @return bool
     * @throws \Longman\TelegramBot\Exception\TelegramException
     */
    public function push(string $message) : bool
    {
        $result = Request::sendMessage([
            'chat_id'    => $this->channelId,
            'text'       => $message,
            'parse_mode' => $this->parseMode
        ]);

        return $result->isOk();
    }
}