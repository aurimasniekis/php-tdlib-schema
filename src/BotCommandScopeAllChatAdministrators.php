<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A scope covering all group and supergroup chat administrators
 */
class BotCommandScopeAllChatAdministrators extends BotCommandScope
{
    public const TYPE_NAME = 'botCommandScopeAllChatAdministrators';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BotCommandScopeAllChatAdministrators
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
