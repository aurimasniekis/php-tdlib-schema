<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a list of bot commands
 */
class BotCommands extends TdObject
{
    public const TYPE_NAME = 'botCommands';

    /**
     * Bot's user identifier
     *
     * @var int
     */
    protected int $botUserId;

    /**
     * List of bot commands
     *
     * @var BotCommand[]
     */
    protected array $commands;

    public function __construct(int $botUserId, array $commands)
    {
        $this->botUserId = $botUserId;
        $this->commands = $commands;
    }

    public static function fromArray(array $array): BotCommands
    {
        return new static(
            $array['bot_user_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'bot_user_id' => $this->botUserId,
            array_map(fn($x) => $x->typeSerialize(), $this->commands),
        ];
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getCommands(): array
    {
        return $this->commands;
    }
}
