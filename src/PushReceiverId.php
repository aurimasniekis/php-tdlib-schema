<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a globally unique push receiver identifier, which can be used to identify which account has received a push notification.
 */
class PushReceiverId extends TdObject
{
    public const TYPE_NAME = 'pushReceiverId';

    /**
     * The globally unique identifier of push notification subscription.
     *
     * @var int
     */
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public static function fromArray(array $array): PushReceiverId
    {
        return new static(
            $array['id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }
}
