<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Provides information about a bot and its supported commands.
 */
class BotInfo extends TdObject
{
    public const TYPE_NAME = 'botInfo';

    /**
     * Long description shown on the user info page.
     *
     * @var string
     */
    protected string $description;

    /**
     * A list of commands supported by the bot.
     *
     * @var BotCommand[]
     */
    protected array $commands;

    public function __construct(string $description, array $commands)
    {
        $this->description = $description;
        $this->commands    = $commands;
    }

    public static function fromArray(array $array): BotInfo
    {
        return new static(
            $array['description'],
            array_map(fn ($x) => BotCommand::fromArray($x), $array['commands']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'description'     => $this->description,
            array_map(fn ($x) => $x->typeSerialize(), $this->commands),
        ];
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCommands(): array
    {
        return $this->commands;
    }
}
