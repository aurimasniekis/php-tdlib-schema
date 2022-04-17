<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A scope covering all users
 */
class BotCommandScopeDefault extends BotCommandScope
{
    public const TYPE_NAME = 'botCommandScopeDefault';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BotCommandScopeDefault
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
