<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a photo.
 */
class InlineQueryResultPhoto extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultPhoto';

    /**
     * Unique identifier of the query result.
     *
     * @var string
     */
    protected string $id;

    /**
     * Photo.
     *
     * @var Photo
     */
    protected Photo $photo;

    /**
     * Title of the result, if known.
     *
     * @var string
     */
    protected string $title;

    /**
     * A short description of the result, if known.
     *
     * @var string
     */
    protected string $description;

    public function __construct(string $id, Photo $photo, string $title, string $description)
    {
        parent::__construct();

        $this->id          = $id;
        $this->photo       = $photo;
        $this->title       = $title;
        $this->description = $description;
    }

    public static function fromArray(array $array): InlineQueryResultPhoto
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['photo']),
            $array['title'],
            $array['param_description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'id'                => $this->id,
            'photo'             => $this->photo->typeSerialize(),
            'title'             => $this->title,
            'param_description' => $this->description,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
