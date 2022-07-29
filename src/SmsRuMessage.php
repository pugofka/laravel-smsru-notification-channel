<?php

namespace NotificationChannels\SmsRu;

class SmsRuMessage
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $sender;

    /**
     * @var string
     */
    public $number;

    /**
     * @param $text
     */
    public function __construct($text = null)
    {
        $this->text($text);
    }

    /**
     * Notification text.
     *
     * @param $text
     *
     * @return $this
     */
    public function text($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @param string $content
     *
     * @return static
     */
    public static function create($text = null)
    {
        return new static($text);
    }

    /**
     * Set sender.
     *
     * @param $sender
     *
     * @return $this
     */
    public function from($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Recipient's phone number.
     *
     * @param $number
     *
     * @return $this
     */
    public function to($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Determine if phone number is not given.
     *
     * @return bool
     */
    public function toNotGiven()
    {
        return !$this->number;
    }

    /**
     * Determine if sender is not given.
     *
     * @return bool
     */
    public function senderNotGiven()
    {
        return !$this->sender;
    }
}
