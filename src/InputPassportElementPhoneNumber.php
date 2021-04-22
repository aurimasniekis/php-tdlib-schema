<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A Telegram Passport element to be saved containing the user's phone number.
 */
class InputPassportElementPhoneNumber extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementPhoneNumber';

    /**
     * The phone number to be saved.
     */
    protected string $phoneNumber;

    public function __construct(string $phoneNumber)
    {
        parent::__construct();

        $this->phoneNumber = $phoneNumber;
    }

    public static function fromArray(array $array): InputPassportElementPhoneNumber
    {
        return new static(
            $array['phone_number'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
        ];
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}
