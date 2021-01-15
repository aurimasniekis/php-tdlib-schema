<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates a new call.
 */
class CreateCall extends TdFunction
{
    public const TYPE_NAME = 'createCall';

    /**
     * Identifier of the user to be called.
     *
     * @var int
     */
    protected int $userId;

    /**
     * Description of the call protocols supported by the client.
     *
     * @var CallProtocol
     */
    protected CallProtocol $protocol;

    public function __construct(int $userId, CallProtocol $protocol)
    {
        $this->userId   = $userId;
        $this->protocol = $protocol;
    }

    public static function fromArray(array $array): CreateCall
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['protocol']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_id'  => $this->userId,
            'protocol' => $this->protocol->typeSerialize(),
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getProtocol(): CallProtocol
    {
        return $this->protocol;
    }
}
