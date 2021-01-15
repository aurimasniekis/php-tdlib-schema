<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits the time when a scheduled message will be sent. Scheduling state of all messages in the same album or forwarded together with the message will be also changed.
 */
class EditMessageSchedulingState extends TdFunction
{
    public const TYPE_NAME = 'editMessageSchedulingState';

    /**
     * The chat the message belongs to.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The new message scheduling state. Pass null to send the message immediately.
     *
     * @var MessageSchedulingState
     */
    protected MessageSchedulingState $schedulingState;

    public function __construct(int $chatId, int $messageId, MessageSchedulingState $schedulingState)
    {
        $this->chatId          = $chatId;
        $this->messageId       = $messageId;
        $this->schedulingState = $schedulingState;
    }

    public static function fromArray(array $array): EditMessageSchedulingState
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['scheduling_state']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
            'scheduling_state' => $this->schedulingState->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSchedulingState(): MessageSchedulingState
    {
        return $this->schedulingState;
    }
}
