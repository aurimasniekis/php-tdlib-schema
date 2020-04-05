<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends messages grouped together into an album. Currently only photo and video messages can be grouped into an album. Returns sent messages.
 */
class SendMessageAlbum extends TdFunction
{
    public const TYPE_NAME = 'sendMessageAlbum';

    /**
     * Target chat.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of a message to reply to or 0.
     *
     * @var int
     */
    protected int $replyToMessageId;

    /**
     * Options to be used to send the messages.
     *
     * @var SendMessageOptions
     */
    protected SendMessageOptions $options;

    /**
     * Contents of messages to be sent.
     *
     * @var InputMessageContent[]
     */
    protected array $inputMessageContents;

    public function __construct(int $chatId, int $replyToMessageId, SendMessageOptions $options, array $inputMessageContents)
    {
        $this->chatId               = $chatId;
        $this->replyToMessageId     = $replyToMessageId;
        $this->options              = $options;
        $this->inputMessageContents = $inputMessageContents;
    }

    public static function fromArray(array $array): SendMessageAlbum
    {
        return new static(
            $array['chat_id'],
            $array['reply_to_message_id'],
            TdSchemaRegistry::fromArray($array['options']),
            array_map(fn ($x) => InputMessageContent::fromArray($x), $array['inputMessageContents']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'reply_to_message_id' => $this->replyToMessageId,
            'options'             => $this->options->typeSerialize(),
            array_map(fn ($x)     => $x->typeSerialize(), $this->inputMessageContents),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    public function getOptions(): SendMessageOptions
    {
        return $this->options;
    }

    public function getInputMessageContents(): array
    {
        return $this->inputMessageContents;
    }
}
