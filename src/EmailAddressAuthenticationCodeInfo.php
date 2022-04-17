<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Information about the email address authentication code that was sent
 */
class EmailAddressAuthenticationCodeInfo extends TdObject
{
    public const TYPE_NAME = 'emailAddressAuthenticationCodeInfo';

    /**
     * Pattern of the email address to which an authentication code was sent
     *
     * @var string
     */
    protected string $emailAddressPattern;

    /**
     * Length of the code; 0 if unknown
     *
     * @var int
     */
    protected int $length;

    public function __construct(string $emailAddressPattern, int $length)
    {
        $this->emailAddressPattern = $emailAddressPattern;
        $this->length = $length;
    }

    public static function fromArray(array $array): EmailAddressAuthenticationCodeInfo
    {
        return new static(
            $array['email_address_pattern'],
            $array['length'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'email_address_pattern' => $this->emailAddressPattern,
            'length' => $this->length,
        ];
    }

    public function getEmailAddressPattern(): string
    {
        return $this->emailAddressPattern;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}
