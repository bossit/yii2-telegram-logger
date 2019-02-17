<?php

namespace bossit\logger;

use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;
use yii\base\Component;
use yii\helpers\Html;

class TelegramService extends Component implements TelegramServiceInterface
{
    /** @var string */
    public $channelId;

    /** @var string */
    public $botName;

    /** @var string */
    public $botKey;

    /** @var string */
    protected $parseMode = TelegramService::PARSE_MODE_HTML;

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
     * @param string $channelId
     *
     * @return TelegramService
     */
    public function setChannel(string $channelId) : self
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * @param string $parseMode
     *
     * @return TelegramService
     */
    public function setParseMode(string $parseMode) : TelegramService
    {
        $this->parseMode = $parseMode;

        return $this;
    }

    /**
     * @param string $message
     * @param string $title
     *
     * @return bool
     * @throws \Longman\TelegramBot\Exception\TelegramException
     */
    public function push(string $message, string $title = '') : bool
    {
        if (!empty($title)) {
            $message = Html::tag('b', $title)
                . PHP_EOL
                . $message;
        }

        $result = Request::sendMessage([
            'chat_id'    => $this->channelId,
            'text'       => $message,
            'parse_mode' => $this->parseMode
        ]);

        return $result->isOk();
    }
}