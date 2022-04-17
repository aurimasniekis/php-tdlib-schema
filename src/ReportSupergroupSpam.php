<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Reports messages in a supergroup as spam; requires administrator rights in the supergroup
 */
class ReportSupergroupSpam extends TdFunction
{
    public const TYPE_NAME = 'reportSupergroupSpam';

    /**
     * Supergroup identifier
     *
     * @var int
     */
    protected int $supergroupId;

    /**
     * Identifiers of messages to report
     *
     * @var int[]
     */
    protected array $messageIds;

    public function __construct(int $supergroupId, array $messageIds)
    {
        $this->supergroupId = $supergroupId;
        $this->messageIds = $messageIds;
    }

    public static function fromArray(array $array): ReportSupergroupSpam
    {
        return new static(
            $array['supergroup_id'],
            $array['message_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'message_ids' => $this->messageIds,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }
}
