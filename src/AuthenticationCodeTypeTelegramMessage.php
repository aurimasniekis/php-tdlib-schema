<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An authentication code is delivered via a private Telegram message, which can be viewed in another client.
 */
class AuthenticationCodeTypeTelegramMessage extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeTelegramMessage';

    /**
     * Length of the code.
     *
     * @var int
     */
    protected int $length;

    public function __construct(int $length)
    {
        parent::__construct();

        $this->length = $length;
    }

    public static function fromArray(array $array): AuthenticationCodeTypeTelegramMessage
    {
        return new static(
            $array['length'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'length' => $this->length,
        ];
    }

    public function getLength(): int
    {
        return $this->length;
    }
}
