<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends the result of an inline query as a message. Returns the sent message. Always clears a chat draft message.
 */
class SendInlineQueryResultMessage extends TdFunction
{
    public const TYPE_NAME = 'sendInlineQueryResultMessage';

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
     * Options to be used to send the message.
     *
     * @var SendMessageOptions
     */
    protected SendMessageOptions $options;

    /**
     * Identifier of the inline query.
     *
     * @var int
     */
    protected int $queryId;

    /**
     * Identifier of the inline result.
     *
     * @var string
     */
    protected string $resultId;

    /**
     * If true, there will be no mention of a bot, via which the message is sent. Can be used only for bots GetOption("animation_search_bot_username"), GetOption("photo_search_bot_username") and GetOption("venue_search_bot_username").
     *
     * @var bool
     */
    protected bool $hideViaBot;

    public function __construct(int $chatId, int $replyToMessageId, SendMessageOptions $options, int $queryId, string $resultId, bool $hideViaBot)
    {
        $this->chatId           = $chatId;
        $this->replyToMessageId = $replyToMessageId;
        $this->options          = $options;
        $this->queryId          = $queryId;
        $this->resultId         = $resultId;
        $this->hideViaBot       = $hideViaBot;
    }

    public static function fromArray(array $array): SendInlineQueryResultMessage
    {
        return new static(
            $array['chat_id'],
            $array['reply_to_message_id'],
            TdSchemaRegistry::fromArray($array['options']),
            $array['query_id'],
            $array['result_id'],
            $array['hide_via_bot'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'reply_to_message_id' => $this->replyToMessageId,
            'options'             => $this->options->typeSerialize(),
            'query_id'            => $this->queryId,
            'result_id'           => $this->resultId,
            'hide_via_bot'        => $this->hideViaBot,
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

    public function getQueryId(): int
    {
        return $this->queryId;
    }

    public function getResultId(): string
    {
        return $this->resultId;
    }

    public function getHideViaBot(): bool
    {
        return $this->hideViaBot;
    }
}
