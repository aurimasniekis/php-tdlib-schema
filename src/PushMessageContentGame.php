<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a game
 */
class PushMessageContentGame extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentGame';

    /**
     * Game title, empty for pinned game message
     *
     * @var string
     */
    protected string $title;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(string $title, bool $isPinned)
    {
        parent::__construct();

        $this->title = $title;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentGame
    {
        return new static(
            $array['title'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
