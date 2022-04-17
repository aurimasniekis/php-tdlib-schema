<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a Telegram bot, which is supposed to be added to a group chat. Call searchPublicChat with the given bot username, check that the user is a bot and can be added to groups, ask the current user to select a group to add the bot to, and then call sendBotStartMessage with the given start parameter and the chosen group chat. Bots can be added to a public group only by administrators of the group
 */
class InternalLinkTypeBotStartInGroup extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBotStartInGroup';

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

    public static function fromArray(array $array): InternalLinkTypeBotStartInGroup
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
