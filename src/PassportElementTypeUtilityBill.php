<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element containing the user's utility bill
 */
class PassportElementTypeUtilityBill extends PassportElementType
{
    public const TYPE_NAME = 'passportElementTypeUtilityBill';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementTypeUtilityBill
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
