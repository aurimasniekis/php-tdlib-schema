<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a chat or user profile photo
 */
class ChatPhoto extends TdObject
{
    public const TYPE_NAME = 'chatPhoto';

    /**
     * Unique photo identifier
     *
     * @var string
     */
    protected string $id;

    /**
     * Point in time (Unix timestamp) when the photo has been added
     *
     * @var int
     */
    protected int $addedDate;

    /**
     * Photo minithumbnail; may be null
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $minithumbnail;

    /**
     * Available variants of the photo in JPEG format, in different size
     *
     * @var PhotoSize[]
     */
    protected array $sizes;

    /**
     * Animated variant of the photo in MPEG4 format; may be null
     *
     * @var AnimatedChatPhoto|null
     */
    protected ?AnimatedChatPhoto $animation;

    public function __construct(
        string $id,
        int $addedDate,
        ?Minithumbnail $minithumbnail,
        array $sizes,
        ?AnimatedChatPhoto $animation
    ) {
        $this->id = $id;
        $this->addedDate = $addedDate;
        $this->minithumbnail = $minithumbnail;
        $this->sizes = $sizes;
        $this->animation = $animation;
    }

    public static function fromArray(array $array): ChatPhoto
    {
        return new static(
            $array['id'],
            $array['added_date'],
            (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['sizes']),
            (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'added_date' => $this->addedDate,
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            array_map(fn($x) => $x->typeSerialize(), $this->sizes),
            'animation' => (isset($this->animation) ? $this->animation : null),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getAddedDate(): int
    {
        return $this->addedDate;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getSizes(): array
    {
        return $this->sizes;
    }

    public function getAnimation(): ?AnimatedChatPhoto
    {
        return $this->animation;
    }
}
