<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a filter of user chats.
 */
class ChatFilter extends TdObject
{
    public const TYPE_NAME = 'chatFilter';

    /**
     * The title of the filter; 1-12 characters without line feeds.
     */
    protected string $title;

    /**
     * The icon name for short filter representation. If non-empty, must be one of "All", "Unread", "Unmuted", "Bots", "Channels", "Groups", "Private", "Custom", "Setup", "Cat", "Crown", "Favorite", "Flower", "Game", "Home", "Love", "Mask", "Party", "Sport", "Study", "Trade", "Travel", "Work". If empty, use getChatFilterDefaultIconName to get default icon name for the filter.
     */
    protected string $iconName;

    /**
     * The chat identifiers of pinned chats in the filtered chat list.
     *
     * @var int[]
     */
    protected array $pinnedChatIds;

    /**
     * The chat identifiers of always included chats in the filtered chat list.
     *
     * @var int[]
     */
    protected array $includedChatIds;

    /**
     * The chat identifiers of always excluded chats in the filtered chat list.
     *
     * @var int[]
     */
    protected array $excludedChatIds;

    /**
     * True, if muted chats need to be excluded.
     */
    protected bool $excludeMuted;

    /**
     * True, if read chats need to be excluded.
     */
    protected bool $excludeRead;

    /**
     * True, if archived chats need to be excluded.
     */
    protected bool $excludeArchived;

    /**
     * True, if contacts need to be included.
     */
    protected bool $includeContacts;

    /**
     * True, if non-contact users need to be included.
     */
    protected bool $includeNonContacts;

    /**
     * True, if bots need to be included.
     */
    protected bool $includeBots;

    /**
     * True, if basic groups and supergroups need to be included.
     */
    protected bool $includeGroups;

    /**
     * True, if channels need to be included.
     */
    protected bool $includeChannels;

    public function __construct(
        string $title,
        string $iconName,
        array $pinnedChatIds,
        array $includedChatIds,
        array $excludedChatIds,
        bool $excludeMuted,
        bool $excludeRead,
        bool $excludeArchived,
        bool $includeContacts,
        bool $includeNonContacts,
        bool $includeBots,
        bool $includeGroups,
        bool $includeChannels
    ) {
        $this->title              = $title;
        $this->iconName           = $iconName;
        $this->pinnedChatIds      = $pinnedChatIds;
        $this->includedChatIds    = $includedChatIds;
        $this->excludedChatIds    = $excludedChatIds;
        $this->excludeMuted       = $excludeMuted;
        $this->excludeRead        = $excludeRead;
        $this->excludeArchived    = $excludeArchived;
        $this->includeContacts    = $includeContacts;
        $this->includeNonContacts = $includeNonContacts;
        $this->includeBots        = $includeBots;
        $this->includeGroups      = $includeGroups;
        $this->includeChannels    = $includeChannels;
    }

    public static function fromArray(array $array): ChatFilter
    {
        return new static(
            $array['title'],
            $array['icon_name'],
            $array['pinned_chat_ids'],
            $array['included_chat_ids'],
            $array['excluded_chat_ids'],
            $array['exclude_muted'],
            $array['exclude_read'],
            $array['exclude_archived'],
            $array['include_contacts'],
            $array['include_non_contacts'],
            $array['include_bots'],
            $array['include_groups'],
            $array['include_channels'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'title'                => $this->title,
            'icon_name'            => $this->iconName,
            'pinned_chat_ids'      => $this->pinnedChatIds,
            'included_chat_ids'    => $this->includedChatIds,
            'excluded_chat_ids'    => $this->excludedChatIds,
            'exclude_muted'        => $this->excludeMuted,
            'exclude_read'         => $this->excludeRead,
            'exclude_archived'     => $this->excludeArchived,
            'include_contacts'     => $this->includeContacts,
            'include_non_contacts' => $this->includeNonContacts,
            'include_bots'         => $this->includeBots,
            'include_groups'       => $this->includeGroups,
            'include_channels'     => $this->includeChannels,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIconName(): string
    {
        return $this->iconName;
    }

    public function getPinnedChatIds(): array
    {
        return $this->pinnedChatIds;
    }

    public function getIncludedChatIds(): array
    {
        return $this->includedChatIds;
    }

    public function getExcludedChatIds(): array
    {
        return $this->excludedChatIds;
    }

    public function getExcludeMuted(): bool
    {
        return $this->excludeMuted;
    }

    public function getExcludeRead(): bool
    {
        return $this->excludeRead;
    }

    public function getExcludeArchived(): bool
    {
        return $this->excludeArchived;
    }

    public function getIncludeContacts(): bool
    {
        return $this->includeContacts;
    }

    public function getIncludeNonContacts(): bool
    {
        return $this->includeNonContacts;
    }

    public function getIncludeBots(): bool
    {
        return $this->includeBots;
    }

    public function getIncludeGroups(): bool
    {
        return $this->includeGroups;
    }

    public function getIncludeChannels(): bool
    {
        return $this->includeChannels;
    }
}
