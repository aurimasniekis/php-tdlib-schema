<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message was edited
 */
class ChatEventMessageEdited extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMessageEdited';

    /**
     * The original message before the edit
     *
     * @var Message
     */
    protected Message $oldMessage;

    /**
     * The message after it was edited
     *
     * @var Message
     */
    protected Message $newMessage;

    public function __construct(Message $oldMessage, Message $newMessage)
    {
        parent::__construct();

        $this->oldMessage = $oldMessage;
        $this->newMessage = $newMessage;
    }

    public static function fromArray(array $array): ChatEventMessageEdited
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_message']),
            TdSchemaRegistry::fromArray($array['new_message']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_message' => $this->oldMessage->typeSerialize(),
            'new_message' => $this->newMessage->typeSerialize(),
        ];
    }

    public function getOldMessage(): Message
    {
        return $this->oldMessage;
    }

    public function getNewMessage(): Message
    {
        return $this->newMessage;
    }
}
