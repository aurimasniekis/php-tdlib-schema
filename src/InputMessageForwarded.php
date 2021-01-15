<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A forwarded message.
 */
class InputMessageForwarded extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageForwarded';

    /**
     * Identifier for the chat this forwarded message came from.
     *
     * @var int
     */
    protected int $fromChatId;

    /**
     * Identifier of the message to forward.
     *
     * @var int
     */
    protected int $messageId;

    /**
     * True, if a game message should be shared within a launched game; applies only to game messages.
     *
     * @var bool
     */
    protected bool $inGameShare;

    /**
     * True, if content of the message needs to be copied without a link to the original message. Always true if the message is forwarded to a secret chat.
     *
     * @var bool
     */
    protected bool $sendCopy;

    /**
     * True, if media caption of the message copy needs to be removed. Ignored if send_copy is false.
     *
     * @var bool
     */
    protected bool $removeCaption;

    public function __construct(int $fromChatId, int $messageId, bool $inGameShare, bool $sendCopy, bool $removeCaption)
    {
        parent::__construct();

        $this->fromChatId    = $fromChatId;
        $this->messageId     = $messageId;
        $this->inGameShare   = $inGameShare;
        $this->sendCopy      = $sendCopy;
        $this->removeCaption = $removeCaption;
    }

    public static function fromArray(array $array): InputMessageForwarded
    {
        return new static(
            $array['from_chat_id'],
            $array['message_id'],
            $array['in_game_share'],
            $array['send_copy'],
            $array['remove_caption'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'from_chat_id'   => $this->fromChatId,
            'message_id'     => $this->messageId,
            'in_game_share'  => $this->inGameShare,
            'send_copy'      => $this->sendCopy,
            'remove_caption' => $this->removeCaption,
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

    public function getSendCopy(): bool
    {
        return $this->sendCopy;
    }

    public function getRemoveCaption(): bool
    {
        return $this->removeCaption;
    }
}
