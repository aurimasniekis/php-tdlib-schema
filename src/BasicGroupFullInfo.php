<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains full information about a basic group
 */
class BasicGroupFullInfo extends TdObject
{
    public const TYPE_NAME = 'basicGroupFullInfo';

    /**
     * Chat photo; may be null
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $photo;

    /**
     * Group description
     *
     * @var string
     */
    protected string $description;

    /**
     * User identifier of the creator of the group; 0 if unknown
     *
     * @var int
     */
    protected int $creatorUserId;

    /**
     * Group members
     *
     * @var ChatMember[]
     */
    protected array $members;

    /**
     * Invite link for this group; available only after it has been generated at least once and only for the group creator
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(
        ?ChatPhoto $photo,
        string $description,
        int $creatorUserId,
        array $members,
        string $inviteLink
    ) {
        $this->photo = $photo;
        $this->description = $description;
        $this->creatorUserId = $creatorUserId;
        $this->members = $members;
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): BasicGroupFullInfo
    {
        return new static(
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['description'],
            $array['creator_user_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
            $array['invite_link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'description' => $this->description,
            'creator_user_id' => $this->creatorUserId,
            array_map(fn($x) => $x->typeSerialize(), $this->members),
            'invite_link' => $this->inviteLink,
        ];
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }
}
