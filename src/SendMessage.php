<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a message. Returns the sent message.
 */
class SendMessage extends TdFunction
{
    public const TYPE_NAME = 'sendMessage';

    /**
     * Target chat.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message to reply to or 0.
     *
     * @var int
     */
    protected int $replyToMessageId;

    /**
     * Options to be used to send the message.
     *
     * @var SendMessageOptions
     */
    protected SendMessageOptions $options;

    /**
     * Markup for replying to the message; for bots only.
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * The content of the message to be sent.
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        int $chatId,
        int $replyToMessageId,
        SendMessageOptions $options,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        $this->chatId              = $chatId;
        $this->replyToMessageId    = $replyToMessageId;
        $this->options             = $options;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): SendMessage
    {
        return new static(
            $array['chat_id'],
            $array['reply_to_message_id'],
            TdSchemaRegistry::fromArray($array['options']),
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'reply_to_message_id'   => $this->replyToMessageId,
            'options'               => $this->options->typeSerialize(),
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
