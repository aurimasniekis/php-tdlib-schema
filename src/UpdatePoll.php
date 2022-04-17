<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A poll was updated; for bots only
 */
class UpdatePoll extends Update
{
    public const TYPE_NAME = 'updatePoll';

    /**
     * New data about the poll
     *
     * @var Poll
     */
    protected Poll $poll;

    public function __construct(Poll $poll)
    {
        parent::__construct();

        $this->poll = $poll;
    }

    public static function fromArray(array $array): UpdatePoll
    {
        return new static(
            TdSchemaRegistry::fromArray($array['poll']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'poll' => $this->poll->typeSerialize(),
        ];
    }

    public function getPoll(): Poll
    {
        return $this->poll;
    }
}
