<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a supergroup or channel with zero or more members (subscribers in the case of channels). From the point of view of the system, a channel is a special kind of a supergroup: only administrators can post and see the list of members, and posts from all administrators use the name and photo of the channel instead of individual names and profile photos. Unlike supergroups, channels can have an unlimited number of subscribers.
 */
class Supergroup extends TdObject
{
    public const TYPE_NAME = 'supergroup';

    /**
     * Supergroup or channel identifier.
     *
     * @var int
     */
    protected int $id;

    /**
     * Username of the supergroup or channel; empty for private supergroups or channels.
     *
     * @var string
     */
    protected string $username;

    /**
     * Point in time (Unix timestamp) when the current user joined, or the point in time when the supergroup or channel was created, in case the user is not a member.
     *
     * @var int
     */
    protected int $date;

    /**
     * Status of the current user in the supergroup or channel; custom title will be always empty.
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $status;

    /**
     * Number of members in the supergroup or channel; 0 if unknown. Currently it is guaranteed to be known only if the supergroup or channel was found through SearchPublicChats.
     *
     * @var int
     */
    protected int $memberCount;

    /**
     * True, if the channel has a discussion group, or the supergroup is the designated discussion group for a channel.
     *
     * @var bool
     */
    protected bool $hasLinkedChat;

    /**
     * True, if the supergroup is connected to a location, i.e. the supergroup is a location-based supergroup.
     *
     * @var bool
     */
    protected bool $hasLocation;

    /**
     * True, if messages sent to the channel should contain information about the sender. This field is only applicable to channels.
     *
     * @var bool
     */
    protected bool $signMessages;

    /**
     * True, if the slow mode is enabled in the supergroup.
     *
     * @var bool
     */
    protected bool $isSlowModeEnabled;

    /**
     * True, if the supergroup is a channel.
     *
     * @var bool
     */
    protected bool $isChannel;

    /**
     * True, if the supergroup or channel is verified.
     *
     * @var bool
     */
    protected bool $isVerified;

    /**
     * If non-empty, contains a human-readable description of the reason why access to this supergroup or channel must be restricted.
     *
     * @var string
     */
    protected string $restrictionReason;

    /**
     * True, if many users reported this supergroup as a scam.
     *
     * @var bool
     */
    protected bool $isScam;

    public function __construct(
        int $id,
        string $username,
        int $date,
        ChatMemberStatus $status,
        int $memberCount,
        bool $hasLinkedChat,
        bool $hasLocation,
        bool $signMessages,
        bool $isSlowModeEnabled,
        bool $isChannel,
        bool $isVerified,
        string $restrictionReason,
        bool $isScam
    ) {
        $this->id                = $id;
        $this->username          = $username;
        $this->date              = $date;
        $this->status            = $status;
        $this->memberCount       = $memberCount;
        $this->hasLinkedChat     = $hasLinkedChat;
        $this->hasLocation       = $hasLocation;
        $this->signMessages      = $signMessages;
        $this->isSlowModeEnabled = $isSlowModeEnabled;
        $this->isChannel         = $isChannel;
        $this->isVerified        = $isVerified;
        $this->restrictionReason = $restrictionReason;
        $this->isScam            = $isScam;
    }

    public static function fromArray(array $array): Supergroup
    {
        return new static(
            $array['id'],
            $array['username'],
            $array['date'],
            TdSchemaRegistry::fromArray($array['status']),
            $array['member_count'],
            $array['has_linked_chat'],
            $array['has_location'],
            $array['sign_messages'],
            $array['is_slow_mode_enabled'],
            $array['is_channel'],
            $array['is_verified'],
            $array['restriction_reason'],
            $array['is_scam'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'id'                   => $this->id,
            'username'             => $this->username,
            'date'                 => $this->date,
            'status'               => $this->status->typeSerialize(),
            'member_count'         => $this->memberCount,
            'has_linked_chat'      => $this->hasLinkedChat,
            'has_location'         => $this->hasLocation,
            'sign_messages'        => $this->signMessages,
            'is_slow_mode_enabled' => $this->isSlowModeEnabled,
            'is_channel'           => $this->isChannel,
            'is_verified'          => $this->isVerified,
            'restriction_reason'   => $this->restrictionReason,
            'is_scam'              => $this->isScam,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getHasLinkedChat(): bool
    {
        return $this->hasLinkedChat;
    }

    public function getHasLocation(): bool
    {
        return $this->hasLocation;
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }

    public function getIsSlowModeEnabled(): bool
    {
        return $this->isSlowModeEnabled;
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    public function getRestrictionReason(): string
    {
        return $this->restrictionReason;
    }

    public function getIsScam(): bool
    {
        return $this->isScam;
    }
}
