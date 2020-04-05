<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a game.
 */
class Game extends TdObject
{
    public const TYPE_NAME = 'game';

    /**
     * Game ID.
     *
     * @var int
     */
    protected int $id;

    /**
     * Game short name. To share a game use the URL https://t.me/{bot_username}?game={game_short_name}.
     *
     * @var string
     */
    protected string $shortName;

    /**
     * Game title.
     *
     * @var string
     */
    protected string $title;

    /**
     * Game text, usually containing scoreboards for a game.
     *
     * @var FormattedText
     */
    protected FormattedText $text;

    /**
     * Game description.
     *
     * @var string
     */
    protected string $description;

    /**
     * Game photo.
     *
     * @var Photo
     */
    protected Photo $photo;

    /**
     * Game animation; may be null.
     *
     * @var Animation|null
     */
    protected ?Animation $animation;

    public function __construct(int $id, string $shortName, string $title, FormattedText $text, string $description, Photo $photo, ?Animation $animation)
    {
        $this->id          = $id;
        $this->shortName   = $shortName;
        $this->title       = $title;
        $this->text        = $text;
        $this->description = $description;
        $this->photo       = $photo;
        $this->animation   = $animation;
    }

    public static function fromArray(array $array): Game
    {
        return new static(
            $array['id'],
            $array['short_name'],
            $array['title'],
            TdSchemaRegistry::fromArray($array['text']),
            $array['param_description'],
            TdSchemaRegistry::fromArray($array['photo']),
            (isset($array['animation']) ? TdSchemaRegistry::fromArray($array['animation']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'id'                => $this->id,
            'short_name'        => $this->shortName,
            'title'             => $this->title,
            'text'              => $this->text->typeSerialize(),
            'param_description' => $this->description,
            'photo'             => $this->photo->typeSerialize(),
            'animation'         => (isset($this->animation) ? $this->animation : null),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }
}
