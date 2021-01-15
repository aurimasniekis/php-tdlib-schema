<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a globally unique push notification subscription identifier for identification of an account, which has received a push notification. Can be called synchronously.
 */
class GetPushReceiverId extends TdFunction
{
    public const TYPE_NAME = 'getPushReceiverId';

    /**
     * JSON-encoded push notification payload.
     */
    protected string $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public static function fromArray(array $array): GetPushReceiverId
    {
        return new static(
            $array['payload'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'payload' => $this->payload,
        ];
    }

    public function getPayload(): string
    {
        return $this->payload;
    }
}
