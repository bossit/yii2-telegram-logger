<?php

namespace bossit\logger;

/**
 * Interface TelegramServiceInterface
 *
 * @package bossit\logger
 */
interface TelegramServiceInterface
{
    /** @var string */
    public const PARSE_MODE_HTML = 'html';

    /** @var string */
    public const PARSE_MODE_MARKDOWN = 'markdown';

    /**
     * @param string $channelId
     *
     * @return TelegramService
     */
    public function setChannel(string $channelId) : TelegramService;

    /**
     * @param string $message
     *
     * @return bool
     */
    public function push(string $message) : bool;
}