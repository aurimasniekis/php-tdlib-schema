<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Some animated emoji message was clicked and a big animated sticker must be played if the message is visible on the screen. chatActionWatchingAnimations with the text of the message needs to be sent if the sticker is played
 */
class UpdateAnimatedEmojiMessageClicked extends Update
{
    public const TYPE_NAME = 'updateAnimatedEmojiMessageClicked';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The animated sticker to be played
     *
     * @var Sticker
     */
    protected Sticker $sticker;

    public function __construct(int $chatId, int $messageId, Sticker $sticker)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): UpdateAnimatedEmojiMessageClicked
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'sticker' => $this->sticker->typeSerialize(),
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

    public function getSticker(): Sticker
    {
        return $this->sticker;
    }
}
