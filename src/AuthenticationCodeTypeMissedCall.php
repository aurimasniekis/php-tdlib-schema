<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An authentication code is delivered by an immediately canceled call to the specified phone number. The last digits of the phone number that calls are the code that must be entered manually by the user
 */
class AuthenticationCodeTypeMissedCall extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeMissedCall';

    /**
     * Prefix of the phone number from which the call will be made
     *
     * @var string
     */
    protected string $phoneNumberPrefix;

    /**
     * Number of digits in the code, excluding the prefix
     *
     * @var int
     */
    protected int $length;

    public function __construct(string $phoneNumberPrefix, int $length)
    {
        parent::__construct();

        $this->phoneNumberPrefix = $phoneNumberPrefix;
        $this->length = $length;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeMissedCall
    {
        return new static(
            $array['phone_number_prefix'],
            $array['length'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'phone_number_prefix' => $this->phoneNumberPrefix,
            'length' => $this->length,
        ];
    }

    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}
