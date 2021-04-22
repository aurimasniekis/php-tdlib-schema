<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Reports some messages from a user in a supergroup as spam; requires administrator rights in the supergroup.
 */
class ReportSupergroupSpam extends TdFunction
{
    public const TYPE_NAME = 'reportSupergroupSpam';

    /**
     * Supergroup identifier.
     */
    protected int $supergroupId;

    /**
     * User identifier.
     */
    protected int $userId;

    /**
     * Identifiers of messages sent in the supergroup by the user. This list must be non-empty.
     *
     * @var int[]
     */
    protected array $messageIds;

    public function __construct(int $supergroupId, int $userId, array $messageIds)
    {
        $this->supergroupId = $supergroupId;
        $this->userId       = $userId;
        $this->messageIds   = $messageIds;
    }

    public static function fromArray(array $array): ReportSupergroupSpam
    {
        return new static(
            $array['supergroup_id'],
            $array['user_id'],
            $array['message_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'user_id'       => $this->userId,
            'message_ids'   => $this->messageIds,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }
}
