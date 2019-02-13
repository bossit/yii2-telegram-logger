<?php

namespace bossit\logger;

/**
 * Interface TelegramNotificationInterface
 *
 * @package bossit\logger
 */
interface TelegramNotificationInterface
{
    /**
     * @return string
     */
    public function getChanel() : string;

    /**
     * @return string
     */
    public function getTitle() : string;

    /**
     * @return string
     */
    public function getMessage() : string;

    /**
     * @return string
     */
    public function getParseMode() : string;

    /**
     * @return string
     */
    public function getTime() : string;
}