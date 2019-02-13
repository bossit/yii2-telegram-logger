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
     * @return mixed
     */
    public function init();

    /**
     * @param TelegramNotificationInterface $event
     *
     * @return mixed
     */
    public function push(TelegramNotificationInterface $event);
}