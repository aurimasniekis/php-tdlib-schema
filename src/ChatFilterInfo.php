<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains basic information about a chat filter
 */
class ChatFilterInfo extends TdObject
{
    public const TYPE_NAME = 'chatFilterInfo';

    /**
     * Unique chat filter identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * The title of the filter; 1-12 characters without line feeds
     *
     * @var string
     */
    protected string $title;

    /**
     * The chosen or default icon name for short filter representation. One of "All", "Unread", "Unmuted", "Bots", "Channels", "Groups", "Private", "Custom", "Setup", "Cat", "Crown", "Favorite", "Flower", "Game", "Home", "Love", "Mask", "Party", "Sport", "Study", "Trade", "Travel", "Work"
     *
     * @var string
     */
    protected string $iconName;

    public function __construct(int $id, string $title, string $iconName)
    {
        $this->id = $id;
        $this->title = $title;
        $this->iconName = $iconName;
    }

    public static function fromArray(array $array): ChatFilterInfo
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['icon_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'title' => $this->title,
            'icon_name' => $this->iconName,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIconName(): string
    {
        return $this->iconName;
    }
}
