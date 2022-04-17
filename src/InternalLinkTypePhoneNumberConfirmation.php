<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link can be used to confirm ownership of a phone number to prevent account deletion. Call sendPhoneNumberConfirmationCode with the given hash and phone number to process the link
 */
class InternalLinkTypePhoneNumberConfirmation extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePhoneNumberConfirmation';

    /**
     * Hash value from the link
     *
     * @var string
     */
    protected string $hash;

    /**
     * Phone number value from the link
     *
     * @var string
     */
    protected string $phoneNumber;

    public function __construct(string $hash, string $phoneNumber)
    {
        parent::__construct();

        $this->hash = $hash;
        $this->phoneNumber = $phoneNumber;
    }

    public static function fromArray(array $array): InternalLinkTypePhoneNumberConfirmation
    {
        return new static(
            $array['hash'],
            $array['phone_number'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'hash' => $this->hash,
            'phone_number' => $this->phoneNumber,
        ];
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}
