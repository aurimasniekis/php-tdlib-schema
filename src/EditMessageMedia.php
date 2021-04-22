<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Edits the content of a message with an animation, an audio, a document, a photo or a video. The media in the message can't be replaced if the message was set to self-destruct. Media can't be replaced by self-destructing media. Media in an album can be edited only to contain a photo or a video. Returns the edited message after the edit is completed on the server side.
 */
class EditMessageMedia extends TdFunction
{
    public const TYPE_NAME = 'editMessageMedia';

    /**
     * The chat the message belongs to.
     */
    protected int $chatId;

    /**
     * Identifier of the message.
     */
    protected int $messageId;

    /**
     * The new message reply markup; for bots only.
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * New content of the message. Must be one of the following types: InputMessageAnimation, InputMessageAudio, InputMessageDocument, InputMessagePhoto or InputMessageVideo.
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        int $chatId,
        int $messageId,
        ReplyMarkup $replyMarkup,
        InputMessageContent $inputMessageContent
    ) {
        $this->chatId              = $chatId;
        $this->messageId           = $messageId;
        $this->replyMarkup         = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): EditMessageMedia
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'message_id'            => $this->messageId,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
