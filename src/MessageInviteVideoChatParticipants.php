<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with information about an invite to a video chat
 */
class MessageInviteVideoChatParticipants extends MessageContent
{
    public const TYPE_NAME = 'messageInviteVideoChatParticipants';

    /**
     * Identifier of the video chat. The video chat can be received through the method getGroupCall
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * Invited user identifiers
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(int $groupCallId, array $userIds)
    {
        parent::__construct();

        $this->groupCallId = $groupCallId;
        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): MessageInviteVideoChatParticipants
    {
        return new static(
            $array['group_call_id'],
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'user_ids' => $this->userIds,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
