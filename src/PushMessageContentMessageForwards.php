<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A forwarded messages.
 */
class PushMessageContentMessageForwards extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentMessageForwards';

    /**
     * Number of forwarded messages.
     *
     * @var int
     */
    protected int $totalCount;

    public function __construct(int $totalCount)
    {
        parent::__construct();

        $this->totalCount = $totalCount;
    }

    public static function fromArray(array $array): PushMessageContentMessageForwards
    {
        return new static(
            $array['total_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
        ];
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
}
