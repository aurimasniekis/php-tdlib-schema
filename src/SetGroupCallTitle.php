<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Sets group call title. Requires groupCall.can_be_managed group call flag
 */
class SetGroupCallTitle extends TdFunction
{
    public const TYPE_NAME = 'setGroupCallTitle';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $groupCallId;

    /**
     * New group call title; 1-64 characters
     *
     * @var string
     */
    protected string $title;

    public function __construct(int $groupCallId, string $title)
    {
        $this->groupCallId = $groupCallId;
        $this->title = $title;
    }

    public static function fromArray(array $array): SetGroupCallTitle
    {
        return new static(
            $array['group_call_id'],
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'title' => $this->title,
        ];
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
