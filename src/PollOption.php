<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes one answer option of a poll
 */
class PollOption extends TdObject
{
    public const TYPE_NAME = 'pollOption';

    /**
     * Option text, 1-100 characters
     *
     * @var string
     */
    protected string $text;

    /**
     * Number of voters for this option, available only for closed or voted polls
     *
     * @var int
     */
    protected int $voterCount;

    /**
     * The percentage of votes for this option, 0-100
     *
     * @var int
     */
    protected int $votePercentage;

    /**
     * True, if the option was chosen by the user
     *
     * @var bool
     */
    protected bool $isChosen;

    /**
     * True, if the option is being chosen by a pending setPollAnswer request
     *
     * @var bool
     */
    protected bool $isBeingChosen;

    public function __construct(string $text, int $voterCount, int $votePercentage, bool $isChosen, bool $isBeingChosen)
    {
        $this->text = $text;
        $this->voterCount = $voterCount;
        $this->votePercentage = $votePercentage;
        $this->isChosen = $isChosen;
        $this->isBeingChosen = $isBeingChosen;
    }

    public static function fromArray(array $array): PollOption
    {
        return new static(
            $array['text'],
            $array['voter_count'],
            $array['vote_percentage'],
            $array['is_chosen'],
            $array['is_being_chosen'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
            'voter_count' => $this->voterCount,
            'vote_percentage' => $this->votePercentage,
            'is_chosen' => $this->isChosen,
            'is_being_chosen' => $this->isBeingChosen,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getVoterCount(): int
    {
        return $this->voterCount;
    }

    public function getVotePercentage(): int
    {
        return $this->votePercentage;
    }

    public function getIsChosen(): bool
    {
        return $this->isChosen;
    }

    public function getIsBeingChosen(): bool
    {
        return $this->isBeingChosen;
    }
}
