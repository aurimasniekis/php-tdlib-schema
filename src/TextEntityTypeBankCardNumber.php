<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A bank card number. The getBankCardInfo method can be used to get information about the bank card.
 */
class TextEntityTypeBankCardNumber extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeBankCardNumber';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeBankCardNumber
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
