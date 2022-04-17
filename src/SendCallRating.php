<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sends a call rating
 */
class SendCallRating extends TdFunction
{
    public const TYPE_NAME = 'sendCallRating';

    /**
     * Call identifier
     *
     * @var int
     */
    protected int $callId;

    /**
     * Call rating; 1-5
     *
     * @var int
     */
    protected int $rating;

    /**
     * An optional user comment if the rating is less than 5
     *
     * @var string
     */
    protected string $comment;

    /**
     * List of the exact types of problems with the call, specified by the user
     *
     * @var CallProblem[]
     */
    protected array $problems;

    public function __construct(int $callId, int $rating, string $comment, array $problems)
    {
        $this->callId = $callId;
        $this->rating = $rating;
        $this->comment = $comment;
        $this->problems = $problems;
    }

    public static function fromArray(array $array): SendCallRating
    {
        return new static(
            $array['call_id'],
            $array['rating'],
            $array['comment'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['problems']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'call_id' => $this->callId,
            'rating' => $this->rating,
            'comment' => $this->comment,
            array_map(fn($x) => $x->typeSerialize(), $this->problems),
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getProblems(): array
    {
        return $this->problems;
    }
}
