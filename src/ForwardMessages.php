<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Forwards previously sent messages. Returns the forwarded messages in the same order as the message identifiers passed in message_ids. If a message can't be forwarded, null will be returned instead of the message.
 */
class ForwardMessages extends TdFunction
{
    public const TYPE_NAME = 'forwardMessages';

    /**
     * Identifier of the chat to which to forward messages.
     */
    protected int $chatId;

    /**
     * Identifier of the chat from which to forward messages.
     */
    protected int $fromChatId;

    /**
     * Identifiers of the messages to forward. Message identifiers must be in a strictly increasing order.
     *
     * @var int[]
     */
    protected array $messageIds;

    /**
     * Options to be used to send the messages.
     */
    protected MessageSendOptions $options;

    /**
     * True, if content of the messages needs to be copied without links to the original messages. Always true if the messages are forwarded to a secret chat.
     */
    protected bool $sendCopy;

    /**
     * True, if media caption of message copies needs to be removed. Ignored if send_copy is false.
     */
    protected bool $removeCaption;

    public function __construct(
        int $chatId,
        int $fromChatId,
        array $messageIds,
        MessageSendOptions $options,
        bool $sendCopy,
        bool $removeCaption
    ) {
        $this->chatId        = $chatId;
        $this->fromChatId    = $fromChatId;
        $this->messageIds    = $messageIds;
        $this->options       = $options;
        $this->sendCopy      = $sendCopy;
        $this->removeCaption = $removeCaption;
    }

    public static function fromArray(array $array): ForwardMessages
    {
        return new static(
            $array['chat_id'],
            $array['from_chat_id'],
            $array['message_ids'],
            TdSchemaRegistry::fromArray($array['options']),
            $array['send_copy'],
            $array['remove_caption'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'from_chat_id'   => $this->fromChatId,
            'message_ids'    => $this->messageIds,
            'options'        => $this->options->typeSerialize(),
            'send_copy'      => $this->sendCopy,
            'remove_caption' => $this->removeCaption,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromChatId(): int
    {
        return $this->fromChatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getOptions(): MessageSendOptions
    {
        return $this->options;
    }

    public function getSendCopy(): bool
    {
        return $this->sendCopy;
    }

    public function getRemoveCaption(): bool
    {
        return $this->removeCaption;
    }
}
