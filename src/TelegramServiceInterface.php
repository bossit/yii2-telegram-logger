<?php

namespace bossit\logger;

/**
 * Interface TelegramServiceInterface
 *
 * @package bossit\logger
 */
interface TelegramServiceInterface
{
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