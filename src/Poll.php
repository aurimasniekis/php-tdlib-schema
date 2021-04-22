<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a poll.
 */
class Poll extends TdObject
{
    public const TYPE_NAME = 'poll';

    /**
     * Unique poll identifier.
     */
    protected string $id;

    /**
     * Poll question; 1-300 characters.
     */
    protected string $question;

    /**
     * List of poll answer options.
     *
     * @var PollOption[]
     */
    protected array $options;

    /**
     * Total number of voters, participating in the poll.
     */
    protected int $totalVoterCount;

    /**
     * User identifiers of recent voters, if the poll is non-anonymous.
     *
     * @var int[]
     */
    protected array $recentVoterUserIds;

    /**
     * True, if the poll is anonymous.
     */
    protected bool $isAnonymous;

    /**
     * Type of the poll.
     */
    protected PollType $type;

    /**
     * Amount of time the poll will be active after creation, in seconds.
     */
    protected int $openPeriod;

    /**
     * Point in time (Unix timestamp) when the poll will be automatically closed.
     */
    protected int $closeDate;

    /**
     * True, if the poll is closed.
     */
    protected bool $isClosed;

    public function __construct(
        string $id,
        string $question,
        array $options,
        int $totalVoterCount,
        array $recentVoterUserIds,
        bool $isAnonymous,
        PollType $type,
        int $openPeriod,
        int $closeDate,
        bool $isClosed
    ) {
        $this->id                 = $id;
        $this->question           = $question;
        $this->options            = $options;
        $this->totalVoterCount    = $totalVoterCount;
        $this->recentVoterUserIds = $recentVoterUserIds;
        $this->isAnonymous        = $isAnonymous;
        $this->type               = $type;
        $this->openPeriod         = $openPeriod;
        $this->closeDate          = $closeDate;
        $this->isClosed           = $isClosed;
    }

    public static function fromArray(array $array): Poll
    {
        return new static(
            $array['id'],
            $array['question'],
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['options']),
            $array['total_voter_count'],
            $array['recent_voter_user_ids'],
            $array['is_anonymous'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['open_period'],
            $array['close_date'],
            $array['is_closed'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'question'              => $this->question,
            array_map(fn ($x)       => $x->typeSerialize(), $this->options),
            'total_voter_count'     => $this->totalVoterCount,
            'recent_voter_user_ids' => $this->recentVoterUserIds,
            'is_anonymous'          => $this->isAnonymous,
            'type'                  => $this->type->typeSerialize(),
            'open_period'           => $this->openPeriod,
            'close_date'            => $this->closeDate,
            'is_closed'             => $this->isClosed,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getTotalVoterCount(): int
    {
        return $this->totalVoterCount;
    }

    public function getRecentVoterUserIds(): array
    {
        return $this->recentVoterUserIds;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function getType(): PollType
    {
        return $this->type;
    }

    public function getOpenPeriod(): int
    {
        return $this->openPeriod;
    }

    public function getCloseDate(): int
    {
        return $this->closeDate;
    }

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }
}
