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
     *
     * @var string
     */
    protected string $id;

    /**
     * Poll question, 1-255 characters.
     *
     * @var string
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
     *
     * @var int
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
     *
     * @var bool
     */
    protected bool $isAnonymous;

    /**
     * Type of the poll.
     *
     * @var PollType
     */
    protected PollType $type;

    /**
     * True, if the poll is closed.
     *
     * @var bool
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
        bool $isClosed
    ) {
        $this->id                 = $id;
        $this->question           = $question;
        $this->options            = $options;
        $this->totalVoterCount    = $totalVoterCount;
        $this->recentVoterUserIds = $recentVoterUserIds;
        $this->isAnonymous        = $isAnonymous;
        $this->type               = $type;
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

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }
}
