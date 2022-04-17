<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A user changed the answer to a poll; for bots only
 */
class UpdatePollAnswer extends Update
{
    public const TYPE_NAME = 'updatePollAnswer';

    /**
     * Unique poll identifier
     *
     * @var string
     */
    protected string $pollId;

    /**
     * The user, who changed the answer to the poll
     *
     * @var int
     */
    protected int $userId;

    /**
     * 0-based identifiers of answer options, chosen by the user
     *
     * @var int[]
     */
    protected array $optionIds;

    public function __construct(string $pollId, int $userId, array $optionIds)
    {
        parent::__construct();

        $this->pollId = $pollId;
        $this->userId = $userId;
        $this->optionIds = $optionIds;
    }

    public static function fromArray(array $array): UpdatePollAnswer
    {
        return new static(
            $array['poll_id'],
            $array['user_id'],
            $array['option_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'poll_id' => $this->pollId,
            'user_id' => $this->userId,
            'option_ids' => $this->optionIds,
        ];
    }

    public function getPollId(): string
    {
        return $this->pollId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getOptionIds(): array
    {
        return $this->optionIds;
    }
}
