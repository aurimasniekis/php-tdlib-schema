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
     */
    protected int $correctOptionId;

    /**
     * Text that is shown when the user chooses an incorrect answer or taps on the lamp icon, 0-200 characters with at most 2 line feeds; empty for a yet unanswered poll.
     */
    protected FormattedText $explanation;

    public function __construct(int $correctOptionId, FormattedText $explanation)
    {
        parent::__construct();

        $this->correctOptionId = $correctOptionId;
        $this->explanation     = $explanation;
    }

    public static function fromArray(array $array): PollTypeQuiz
    {
        return new static(
            $array['correct_option_id'],
            TdSchemaRegistry::fromArray($array['explanation']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'correct_option_id' => $this->correctOptionId,
            'explanation'       => $this->explanation->typeSerialize(),
        ];
    }

    public function getCorrectOptionId(): int
    {
        return $this->correctOptionId;
    }

    public function getExplanation(): FormattedText
    {
        return $this->explanation;
    }
}
