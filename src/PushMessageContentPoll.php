<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a poll.
 */
class PushMessageContentPoll extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentPoll';

    /**
     * Poll question.
     *
     * @var string
     */
    protected string $question;

    /**
     * True, if the poll is regular and not in quiz mode.
     *
     * @var bool
     */
    protected bool $isRegular;

    /**
     * True, if the message is a pinned message with the specified content.
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(string $question, bool $isRegular, bool $isPinned)
    {
        parent::__construct();

        $this->question  = $question;
        $this->isRegular = $isRegular;
        $this->isPinned  = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentPoll
    {
        return new static(
            $array['question'],
            $array['is_regular'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'question'   => $this->question,
            'is_regular' => $this->isRegular,
            'is_pinned'  => $this->isPinned,
        ];
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getIsRegular(): bool
    {
        return $this->isRegular;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
