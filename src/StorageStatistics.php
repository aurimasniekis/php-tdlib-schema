<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains the exact storage usage statistics split by chats and file type.
 */
class StorageStatistics extends TdObject
{
    public const TYPE_NAME = 'storageStatistics';

    /**
     * Total size of files.
     *
     * @var int
     */
    protected int $size;

    /**
     * Total number of files.
     *
     * @var int
     */
    protected int $count;

    /**
     * Statistics split by chats.
     *
     * @var StorageStatisticsByChat[]
     */
    protected array $byChat;

    public function __construct(int $size, int $count, array $byChat)
    {
        $this->size   = $size;
        $this->count  = $count;
        $this->byChat = $byChat;
    }

    public static function fromArray(array $array): StorageStatistics
    {
        return new static(
            $array['size'],
            $array['count'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['byChat']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'size'            => $this->size,
            'count'           => $this->count,
            array_map(fn ($x) => $x->typeSerialize(), $this->byChat),
        ];
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getByChat(): array
    {
        return $this->byChat;
    }
}
