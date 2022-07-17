<?php

class Notifier
{
    /**
     * The array containing the recipients.
     *
     * @var array
     */
    protected array $recipients;

    public function __construct(array $recipients)
    {
        $this->recipients = $recipients;
    }

    /**
     * Send a mail to selected recipients.
     *
     * @param $message
     * @return void
     */
    public function send($message)
    {
        $recipients = implode(',', $this->recipients);

        mail(
            $recipients,
            'You received a notification',
            $message
        );
    }
}