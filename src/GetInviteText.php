<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the default text for invitation messages to be used as a placeholder when the current user invites friends to Telegram.
 */
class GetInviteText extends TdFunction
{
    public const TYPE_NAME = 'getInviteText';

    public function __construct()
    {
    }

    public static function fromArray(array $array): GetInviteText
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
