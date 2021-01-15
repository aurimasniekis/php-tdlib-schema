<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A poll in quiz mode, which has exactly one correct answer option and can be answered only once.
 */
class PollTypeQuiz extends PollType
{
    public const TYPE_NAME = 'pollTypeQuiz';

    /**
     * 0-based identifier of the correct answer option; -1 for a yet unanswered poll.
     *
     * @var int
     */
    protected int $correctOptionId;

    public function __construct(int $correctOptionId)
    {
        parent::__construct();

        $this->correctOptionId = $correctOptionId;
    }

    public static function fromArray(array $array): PollTypeQuiz
    {
        return new static(
            $array['correct_option_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'correct_option_id' => $this->correctOptionId,
        ];
    }

    public function getCorrectOptionId(): int
    {
        return $this->correctOptionId;
    }
}
