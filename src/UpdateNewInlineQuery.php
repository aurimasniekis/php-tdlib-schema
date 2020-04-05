<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new incoming inline query; for bots only.
 */
class UpdateNewInlineQuery extends Update
{
    public const TYPE_NAME = 'updateNewInlineQuery';

    /**
     * Unique query identifier.
     *
     * @var int
     */
    protected int $id;

    /**
     * Identifier of the user who sent the query.
     *
     * @var int
     */
    protected int $senderUserId;

    /**
     * User location, provided by the client; may be null.
     *
     * @var Location|null
     */
    protected ?Location $userLocation;

    /**
     * Text of the query.
     *
     * @var string
     */
    protected string $query;

    /**
     * Offset of the first entry to return.
     *
     * @var string
     */
    protected string $offset;

    public function __construct(int $id, int $senderUserId, ?Location $userLocation, string $query, string $offset)
    {
        parent::__construct();

        $this->id           = $id;
        $this->senderUserId = $senderUserId;
        $this->userLocation = $userLocation;
        $this->query        = $query;
        $this->offset       = $offset;
    }

    public static function fromArray(array $array): UpdateNewInlineQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            (null !== $array['user_location'] ? TdSchemaRegistry::fromArray($array['user_location']) : null),
            $array['query'],
            $array['offset'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'id'             => $this->id,
            'sender_user_id' => $this->senderUserId,
            'user_location'  => (null !== $this->userLocation ? $this->userLocation : null),
            'query'          => $this->query,
            'offset'         => $this->offset,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function getUserLocation(): ?Location
    {
        return $this->userLocation;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }
}
