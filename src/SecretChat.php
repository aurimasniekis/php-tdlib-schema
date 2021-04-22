<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a secret chat.
 */
class SecretChat extends TdObject
{
    public const TYPE_NAME = 'secretChat';

    /**
     * Secret chat identifier.
     */
    protected int $id;

    /**
     * Identifier of the chat partner.
     */
    protected int $userId;

    /**
     * State of the secret chat.
     */
    protected SecretChatState $state;

    /**
     * True, if the chat was created by the current user; otherwise false.
     */
    protected bool $isOutbound;

    /**
     * Hash of the currently used key for comparison with the hash of the chat partner's key. This is a string of 36 little-endian bytes, which must be split into groups of 2 bits, each denoting a pixel of one of 4 colors FFFFFF, D5E6F3, 2D5775, and 2F99C9. The pixels must be used to make a 12x12 square image filled from left to right, top to bottom. Alternatively, the first 32 bytes of the hash can be converted to the hexadecimal format and printed as 32 2-digit hex numbers.
     */
    protected string $keyHash;

    /**
     * Secret chat layer; determines features supported by the chat partner's application. Video notes are supported if the layer >= 66; nested text entities and underline and strikethrough entities are supported if the layer >= 101.
     */
    protected int $layer;

    public function __construct(
        int $id,
        int $userId,
        SecretChatState $state,
        bool $isOutbound,
        string $keyHash,
        int $layer
    ) {
        $this->id         = $id;
        $this->userId     = $userId;
        $this->state      = $state;
        $this->isOutbound = $isOutbound;
        $this->keyHash    = $keyHash;
        $this->layer      = $layer;
    }

    public static function fromArray(array $array): SecretChat
    {
        return new static(
            $array['id'],
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['state']),
            $array['is_outbound'],
            $array['key_hash'],
            $array['layer'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'user_id'     => $this->userId,
            'state'       => $this->state->typeSerialize(),
            'is_outbound' => $this->isOutbound,
            'key_hash'    => $this->keyHash,
            'layer'       => $this->layer,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getState(): SecretChatState
    {
        return $this->state;
    }

    public function getIsOutbound(): bool
    {
        return $this->isOutbound;
    }

    public function getKeyHash(): string
    {
        return $this->keyHash;
    }

    public function getLayer(): int
    {
        return $this->layer;
    }
}
