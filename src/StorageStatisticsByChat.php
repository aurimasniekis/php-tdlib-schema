<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the storage usage statistics for a specific chat.
 */
class StorageStatisticsByChat extends TdObject
{
    public const TYPE_NAME = 'storageStatisticsByChat';

    /**
     * Chat identifier; 0 if none.
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Total size of the files in the chat.
     *
     * @var int
     */
    protected int $size;

    /**
     * Total number of files in the chat.
     *
     * @var int
     */
    protected int $count;

    /**
     * Statistics split by file types.
     *
     * @var StorageStatisticsByFileType[]
     */
    protected array $byFileType;

    public function __construct(int $chatId, int $size, int $count, array $byFileType)
    {
        $this->chatId     = $chatId;
        $this->size       = $size;
        $this->count      = $count;
        $this->byFileType = $byFileType;
    }

    public static function fromArray(array $array): StorageStatisticsByChat
    {
        return new static(
            $array['chat_id'],
            $array['size'],
            $array['count'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['byFileType']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'size'            => $this->size,
            'count'           => $this->count,
            array_map(fn ($x) => $x->typeSerialize(), $this->byFileType),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getByFileType(): array
    {
        return $this->byFileType;
    }
}
