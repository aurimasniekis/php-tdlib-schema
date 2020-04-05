<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Telegram Passport data has been received; for bots only.
 */
class MessagePassportDataReceived extends MessageContent
{
    public const TYPE_NAME = 'messagePassportDataReceived';

    /**
     * List of received Telegram Passport elements.
     *
     * @var EncryptedPassportElement[]
     */
    protected array $elements;

    /**
     * Encrypted data credentials.
     *
     * @var EncryptedCredentials
     */
    protected EncryptedCredentials $credentials;

    public function __construct(array $elements, EncryptedCredentials $credentials)
    {
        parent::__construct();

        $this->elements    = $elements;
        $this->credentials = $credentials;
    }

    public static function fromArray(array $array): MessagePassportDataReceived
    {
        return new static(
            array_map(fn ($x) => EncryptedPassportElement::fromArray($x), $array['elements']),
            TdSchemaRegistry::fromArray($array['credentials']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->elements),
            'credentials'     => $this->credentials->typeSerialize(),
        ];
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function getCredentials(): EncryptedCredentials
    {
        return $this->credentials;
    }
}
