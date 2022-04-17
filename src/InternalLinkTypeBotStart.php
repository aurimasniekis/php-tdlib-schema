<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a chat with a Telegram bot. Call searchPublicChat with the given bot username, check that the user is a bot, show START button in the chat with the bot, and then call sendBotStartMessage with the given start parameter after the button is pressed
 */
class InternalLinkTypeBotStart extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBotStart';

    /**
     * Username of the bot
     *
     * @var string
     */
    protected string $botUsername;

    /**
     * The parameter to be passed to sendBotStartMessage
     *
     * @var string
     */
    protected string $startParameter;

    public function __construct(string $botUsername, string $startParameter)
    {
        parent::__construct();

        $this->botUsername = $botUsername;
        $this->startParameter = $startParameter;
    }

    public static function fromArray(array $array): InternalLinkTypeBotStart
    {
        return new static(
            $array['bot_username'],
            $array['start_parameter'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_username' => $this->botUsername,
            'start_parameter' => $this->startParameter,
        ];
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }
}
