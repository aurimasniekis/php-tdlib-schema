<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A voice chat was created.
 */
class ChatEventVoiceChatCreated extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVoiceChatCreated';

    /**
     * Identifier of the voice chat. The voice chat can be received through the method getGroupCall.
     */
    protected int $groupCallId;

    public function __construct(int $groupCallId)
    {
        parent::__construct();

        $this->groupCallId = $groupCallId;
    }

    public static function fromArray(array $array): ChatEventVoiceChatCreated
    {
        return new static(
            $array['group_call_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }
}
