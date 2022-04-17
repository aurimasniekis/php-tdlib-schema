<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A video chat was created
 */
class ChatEventVideoChatCreated extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVideoChatCreated';

    /**
     * Identifier of the video chat. The video chat can be received through the method getGroupCall
     *
     * @var int
     */
    protected int $groupCallId;

    public function __construct(int $groupCallId)
    {
        parent::__construct();

        $this->groupCallId = $groupCallId;
    }

    public static function fromArray(array $array): ChatEventVideoChatCreated
    {
        return new static(
            $array['group_call_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }
}
