<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a chat invite link
 */
class ChatInviteLinkInfo extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkInfo';

    /**
     * Chat identifier of the invite link; 0 if the user has no access to the chat before joining
     *
     * @var int
     */
    protected int $chatId;

    /**
     * If non-zero, the amount of time for which read access to the chat will remain available, in seconds
     *
     * @var int
     */
    protected int $accessibleFor;

    /**
     * Type of the chat
     *
     * @var ChatType
     */
    protected ChatType $type;

    /**
     * Title of the chat
     *
     * @var string
     */
    protected string $title;

    /**
     * Chat photo; may be null
     *
     * @var ChatPhotoInfo|null
     */
    protected ?ChatPhotoInfo $photo;

    /**
     * Chat description
     *
     * @var string
     */
    protected string $description;

    /**
     * Number of members in the chat
     *
     * @var int
     */
    protected int $memberCount;

    /**
     * User identifiers of some chat members that may be known to the current user
     *
     * @var int[]
     */
    protected array $memberUserIds;

    /**
     * True, if the link only creates join request
     *
     * @var bool
     */
    protected bool $createsJoinRequest;

    /**
     * True, if the chat is a public supergroup or channel, i.e. it has a username or it is a location-based supergroup
     *
     * @var bool
     */
    protected bool $isPublic;

    public function __construct(
        int $chatId,
        int $accessibleFor,
        ChatType $type,
        string $title,
        ?ChatPhotoInfo $photo,
        string $description,
        int $memberCount,
        array $memberUserIds,
        bool $createsJoinRequest,
        bool $isPublic
    ) {
        $this->chatId = $chatId;
        $this->accessibleFor = $accessibleFor;
        $this->type = $type;
        $this->title = $title;
        $this->photo = $photo;
        $this->description = $description;
        $this->memberCount = $memberCount;
        $this->memberUserIds = $memberUserIds;
        $this->createsJoinRequest = $createsJoinRequest;
        $this->isPublic = $isPublic;
    }

    public static function fromArray(array $array): ChatInviteLinkInfo
    {
        return new static(
            $array['chat_id'],
            $array['accessible_for'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['title'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['description'],
            $array['member_count'],
            $array['member_user_ids'],
            $array['creates_join_request'],
            $array['is_public'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'accessible_for' => $this->accessibleFor,
            'type' => $this->type->typeSerialize(),
            'title' => $this->title,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'description' => $this->description,
            'member_count' => $this->memberCount,
            'member_user_ids' => $this->memberUserIds,
            'creates_join_request' => $this->createsJoinRequest,
            'is_public' => $this->isPublic,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getAccessibleFor(): int
    {
        return $this->accessibleFor;
    }

    public function getType(): ChatType
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPhoto(): ?ChatPhotoInfo
    {
        return $this->photo;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getMemberUserIds(): array
    {
        return $this->memberUserIds;
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }
}
