<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns invite link to a video chat in a public chat
 */
class GetGroupCallInviteLink extends TdFunction
{
    public const TYPE_NAME = 'getGroupCallInviteLink';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Pass true if the invite link needs to contain an invite hash, passing which to joinGroupCall would allow the invited user to unmute themselves. Requires groupCall.can_be_managed group call flag
     *
     * @var bool
     */
    protected bool $canSelfUnmute;

    public function __construct(int $groupCallId, bool $canSelfUnmute)
    {
        $this->groupCallId = $groupCallId;
        $this->canSelfUnmute = $canSelfUnmute;
    }

    public static function fromArray(array $array): GetGroupCallInviteLink
    {
        return new static(
            $array['group_call_id'],
            $array['can_self_unmute'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'can_self_unmute' => $this->canSelfUnmute,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getCanSelfUnmute(): bool
    {
        return $this->canSelfUnmute;
    }
}
