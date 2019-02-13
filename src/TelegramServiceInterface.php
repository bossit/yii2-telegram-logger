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
     * @param string $message
     *
     * @return bool
     */
    public function push(string $message) : bool;
}