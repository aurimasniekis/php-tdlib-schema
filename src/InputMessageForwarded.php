<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A forwarded message
 */
class InputMessageForwarded extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageForwarded';

    /**
     * Identifier for the chat this forwarded message came from
     *
     * @var int
     */
    protected int $fromChatId;

    /**
     * Identifier of the message to forward
     *
     * @var int
     */
    protected int $messageId;

    /**
     * True, if a game message should be shared within a launched game; applies only to game messages
     *
     * @var bool
     */
    protected bool $inGameShare;

    /**
     * Options to be used to copy content of the message without a link to the original message
     *
     * @var MessageCopyOptions
     */
    protected MessageCopyOptions $copyOptions;

    public function __construct(int $fromChatId, int $messageId, bool $inGameShare, MessageCopyOptions $copyOptions)
    {
        parent::__construct();

        $this->fromChatId = $fromChatId;
        $this->messageId = $messageId;
        $this->inGameShare = $inGameShare;
        $this->copyOptions = $copyOptions;
    }

    public static function fromArray(array $array): InputMessageForwarded
    {
        return new static(
            $array['from_chat_id'],
            $array['message_id'],
            $array['in_game_share'],
            TdSchemaRegistry::fromArray($array['copy_options']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'from_chat_id' => $this->fromChatId,
            'message_id' => $this->messageId,
            'in_game_share' => $this->inGameShare,
            'copy_options' => $this->copyOptions->typeSerialize(),
        ];
    }

    public function getFromChatId(): int
    {
        return $this->fromChatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getInGameShare(): bool
    {
        return $this->inGameShare;
    }

    public function getCopyOptions(): MessageCopyOptions
    {
        return $this->copyOptions;
    }
}
