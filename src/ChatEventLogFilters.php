<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a set of filters used to obtain a chat event log.
 */
class ChatEventLogFilters extends TdObject
{
    public const TYPE_NAME = 'chatEventLogFilters';

    /**
     * True, if message edits should be returned.
     *
     * @var bool
     */
    protected bool $messageEdits;

    /**
     * True, if message deletions should be returned.
     *
     * @var bool
     */
    protected bool $messageDeletions;

    /**
     * True, if pin/unpin events should be returned.
     *
     * @var bool
     */
    protected bool $messagePins;

    /**
     * True, if members joining events should be returned.
     *
     * @var bool
     */
    protected bool $memberJoins;

    /**
     * True, if members leaving events should be returned.
     *
     * @var bool
     */
    protected bool $memberLeaves;

    /**
     * True, if invited member events should be returned.
     *
     * @var bool
     */
    protected bool $memberInvites;

    /**
     * True, if member promotion/demotion events should be returned.
     *
     * @var bool
     */
    protected bool $memberPromotions;

    /**
     * True, if member restricted/unrestricted/banned/unbanned events should be returned.
     *
     * @var bool
     */
    protected bool $memberRestrictions;

    /**
     * True, if changes in chat information should be returned.
     *
     * @var bool
     */
    protected bool $infoChanges;

    /**
     * True, if changes in chat settings should be returned.
     *
     * @var bool
     */
    protected bool $settingChanges;

    public function __construct(
        bool $messageEdits,
        bool $messageDeletions,
        bool $messagePins,
        bool $memberJoins,
        bool $memberLeaves,
        bool $memberInvites,
        bool $memberPromotions,
        bool $memberRestrictions,
        bool $infoChanges,
        bool $settingChanges
    ) {
        $this->messageEdits       = $messageEdits;
        $this->messageDeletions   = $messageDeletions;
        $this->messagePins        = $messagePins;
        $this->memberJoins        = $memberJoins;
        $this->memberLeaves       = $memberLeaves;
        $this->memberInvites      = $memberInvites;
        $this->memberPromotions   = $memberPromotions;
        $this->memberRestrictions = $memberRestrictions;
        $this->infoChanges        = $infoChanges;
        $this->settingChanges     = $settingChanges;
    }

    public static function fromArray(array $array): ChatEventLogFilters
    {
        return new static(
            $array['message_edits'],
            $array['message_deletions'],
            $array['message_pins'],
            $array['member_joins'],
            $array['member_leaves'],
            $array['member_invites'],
            $array['member_promotions'],
            $array['member_restrictions'],
            $array['info_changes'],
            $array['setting_changes'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'message_edits'       => $this->messageEdits,
            'message_deletions'   => $this->messageDeletions,
            'message_pins'        => $this->messagePins,
            'member_joins'        => $this->memberJoins,
            'member_leaves'       => $this->memberLeaves,
            'member_invites'      => $this->memberInvites,
            'member_promotions'   => $this->memberPromotions,
            'member_restrictions' => $this->memberRestrictions,
            'info_changes'        => $this->infoChanges,
            'setting_changes'     => $this->settingChanges,
        ];
    }

    public function getMessageEdits(): bool
    {
        return $this->messageEdits;
    }

    public function getMessageDeletions(): bool
    {
        return $this->messageDeletions;
    }

    public function getMessagePins(): bool
    {
        return $this->messagePins;
    }

    public function getMemberJoins(): bool
    {
        return $this->memberJoins;
    }

    public function getMemberLeaves(): bool
    {
        return $this->memberLeaves;
    }

    public function getMemberInvites(): bool
    {
        return $this->memberInvites;
    }

    public function getMemberPromotions(): bool
    {
        return $this->memberPromotions;
    }

    public function getMemberRestrictions(): bool
    {
        return $this->memberRestrictions;
    }

    public function getInfoChanges(): bool
    {
        return $this->infoChanges;
    }

    public function getSettingChanges(): bool
    {
        return $this->settingChanges;
    }
}
