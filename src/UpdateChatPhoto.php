<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A chat photo was changed.
 */
class UpdateChatPhoto extends Update
{
    public const TYPE_NAME = 'updateChatPhoto';

    /**
     * Chat identifier.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new chat photo; may be null.
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $photo;

    public function __construct(int $chatId, ?ChatPhoto $photo)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->photo  = $photo;
    }

    public static function fromArray(array $array): UpdateChatPhoto
    {
        return new static(
            $array['chat_id'],
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'photo'   => (isset($this->photo) ? $this->photo : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }
}
