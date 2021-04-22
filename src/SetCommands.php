<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets the list of commands supported by the bot; for bots only
 */
class SetCommands extends TdFunction
{
    public const TYPE_NAME = 'setCommands';

    /**
     * List of the bot's commands
     *
     * @var BotCommand[]
     */
    protected array $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public static function fromArray(array $array): SetCommands
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->commands),
        ];
    }

    public function getCommands(): array
    {
        return $this->commands;
    }
}
