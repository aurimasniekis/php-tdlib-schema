<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A bot (see https://core.telegram.org/bots).
 */
class UserTypeBot extends UserType
{
    public const TYPE_NAME = 'userTypeBot';

    /**
     * True, if the bot can be invited to basic group and supergroup chats.
     *
     * @var bool
     */
    protected bool $canJoinGroups;

    /**
     * True, if the bot can read all messages in basic group or supergroup chats and not just those addressed to the bot. In private and channel chats a bot can always read all messages.
     *
     * @var bool
     */
    protected bool $canReadAllGroupMessages;

    /**
     * True, if the bot supports inline queries.
     *
     * @var bool
     */
    protected bool $isInline;

    /**
     * Placeholder for inline queries (displayed on the client input field).
     *
     * @var string
     */
    protected string $inlineQueryPlaceholder;

    /**
     * True, if the location of the user should be sent with every inline query to this bot.
     *
     * @var bool
     */
    protected bool $needLocation;

    public function __construct(bool $canJoinGroups, bool $canReadAllGroupMessages, bool $isInline, string $inlineQueryPlaceholder, bool $needLocation)
    {
        parent::__construct();

        $this->canJoinGroups           = $canJoinGroups;
        $this->canReadAllGroupMessages = $canReadAllGroupMessages;
        $this->isInline                = $isInline;
        $this->inlineQueryPlaceholder  = $inlineQueryPlaceholder;
        $this->needLocation            = $needLocation;
    }

    public static function fromArray(array $array): UserTypeBot
    {
        return new static(
            $array['can_join_groups'],
            $array['can_read_all_group_messages'],
            $array['is_inline'],
            $array['inline_query_placeholder'],
            $array['need_location'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'can_join_groups'             => $this->canJoinGroups,
            'can_read_all_group_messages' => $this->canReadAllGroupMessages,
            'is_inline'                   => $this->isInline,
            'inline_query_placeholder'    => $this->inlineQueryPlaceholder,
            'need_location'               => $this->needLocation,
        ];
    }

    public function getCanJoinGroups(): bool
    {
        return $this->canJoinGroups;
    }

    public function getCanReadAllGroupMessages(): bool
    {
        return $this->canReadAllGroupMessages;
    }

    public function getIsInline(): bool
    {
        return $this->isInline;
    }

    public function getInlineQueryPlaceholder(): string
    {
        return $this->inlineQueryPlaceholder;
    }

    public function getNeedLocation(): bool
    {
        return $this->needLocation;
    }
}
