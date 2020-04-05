<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A new high score was achieved in a game.
 */
class PushMessageContentGameScore extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentGameScore';

    /**
     * Game title, empty for pinned message.
     *
     * @var string
     */
    protected string $title;

    /**
     * New score, 0 for pinned message.
     *
     * @var int
     */
    protected int $score;

    /**
     * True, if the message is a pinned message with the specified content.
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(string $title, int $score, bool $isPinned)
    {
        parent::__construct();

        $this->title    = $title;
        $this->score    = $score;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentGameScore
    {
        return new static(
            $array['title'],
            $array['score'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'title'     => $this->title,
            'score'     => $this->score,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
