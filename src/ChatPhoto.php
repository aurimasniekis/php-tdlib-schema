<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes the photo of a chat.
 */
class ChatPhoto extends TdObject
{
    public const TYPE_NAME = 'chatPhoto';

    /**
     * A small (160x160) chat photo. The file can be downloaded only before the photo is changed.
     *
     * @var File
     */
    protected File $small;

    /**
     * A big (640x640) chat photo. The file can be downloaded only before the photo is changed.
     *
     * @var File
     */
    protected File $big;

    public function __construct(File $small, File $big)
    {
        $this->small = $small;
        $this->big   = $big;
    }

    public static function fromArray(array $array): ChatPhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['small']),
            TdSchemaRegistry::fromArray($array['big']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'small' => $this->small->typeSerialize(),
            'big'   => $this->big->typeSerialize(),
        ];
    }

    public function getSmall(): File
    {
        return $this->small;
    }

    public function getBig(): File
    {
        return $this->big;
    }
}
