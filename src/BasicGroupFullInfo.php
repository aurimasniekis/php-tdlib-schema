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
     * Group description. Updated only after the basic group is opened
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
     * Primary invite link for this group; may be null. For chat administrators with can_invite_users right only. Updated only after the basic group is opened
     *
     * @var ChatInviteLink|null
     */
    protected ?ChatInviteLink $inviteLink;

    /**
     * List of commands of bots in the group
     *
     * @var BotCommands[]
     */
    protected array $botCommands;

    public function __construct(
        ?ChatPhoto $photo,
        string $description,
        int $creatorUserId,
        array $members,
        ?ChatInviteLink $inviteLink,
        array $botCommands
    ) {
        $this->photo = $photo;
        $this->description = $description;
        $this->creatorUserId = $creatorUserId;
        $this->members = $members;
        $this->inviteLink = $inviteLink;
        $this->botCommands = $botCommands;
    }

    public static function fromArray(array $array): BasicGroupFullInfo
    {
        return new static(
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['description'],
            $array['creator_user_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
            (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['bot_commands']),
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
            'invite_link' => (isset($this->inviteLink) ? $this->inviteLink : null),
            array_map(fn($x) => $x->typeSerialize(), $this->botCommands),
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

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getBotCommands(): array
    {
        return $this->botCommands;
    }
}
