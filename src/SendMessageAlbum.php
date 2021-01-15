<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends messages grouped together into an album. Currently only audio, document, photo and video messages can be grouped into an album. Documents and audio files can be only grouped in an album with messages of the same type. Returns sent messages.
 */
class SendMessageAlbum extends TdFunction
{
    public const TYPE_NAME = 'sendMessageAlbum';

    /**
     * Target chat.
     */
    protected int $chatId;

    /**
     * If not 0, a message thread identifier in which the messages will be sent.
     */
    protected int $messageThreadId;

    /**
     * Identifier of a message to reply to or 0.
     */
    protected int $replyToMessageId;

    /**
     * Options to be used to send the messages.
     */
    protected MessageSendOptions $options;

    /**
     * Contents of messages to be sent.
     *
     * @var InputMessageContent[]
     */
    protected array $inputMessageContents;

    public function __construct(int $chatId, int $messageThreadId, int $replyToMessageId, MessageSendOptions $options, array $inputMessageContents)
    {
        $this->chatId               = $chatId;
        $this->messageThreadId      = $messageThreadId;
        $this->replyToMessageId     = $replyToMessageId;
        $this->options              = $options;
        $this->inputMessageContents = $inputMessageContents;
    }

    public static function fromArray(array $array): SendMessageAlbum
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['reply_to_message_id'],
            TdSchemaRegistry::fromArray($array['options']),
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['input_message_contents']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'message_thread_id'   => $this->messageThreadId,
            'reply_to_message_id' => $this->replyToMessageId,
            'options'             => $this->options->typeSerialize(),
            array_map(fn ($x)     => $x->typeSerialize(), $this->inputMessageContents),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getOptions(): MessageSendOptions
    {
        return $this->options;
    }

    public function getInputMessageContents(): array
    {
        return $this->inputMessageContents;
    }
}
