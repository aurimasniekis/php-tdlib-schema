<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains statistics about administrator actions done by a user.
 */
class ChatStatisticsAdministratorActionsInfo extends TdObject
{
    public const TYPE_NAME = 'chatStatisticsAdministratorActionsInfo';

    /**
     * Administrator user identifier.
     */
    protected int $userId;

    /**
     * Number of messages deleted by the administrator.
     */
    protected int $deletedMessageCount;

    /**
     * Number of users banned by the administrator.
     */
    protected int $bannedUserCount;

    /**
     * Number of users restricted by the administrator.
     */
    protected int $restrictedUserCount;

    public function __construct(int $userId, int $deletedMessageCount, int $bannedUserCount, int $restrictedUserCount)
    {
        $this->userId              = $userId;
        $this->deletedMessageCount = $deletedMessageCount;
        $this->bannedUserCount     = $bannedUserCount;
        $this->restrictedUserCount = $restrictedUserCount;
    }

    public static function fromArray(array $array): ChatStatisticsAdministratorActionsInfo
    {
        return new static(
            $array['user_id'],
            $array['deleted_message_count'],
            $array['banned_user_count'],
            $array['restricted_user_count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'user_id'               => $this->userId,
            'deleted_message_count' => $this->deletedMessageCount,
            'banned_user_count'     => $this->bannedUserCount,
            'restricted_user_count' => $this->restrictedUserCount,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getDeletedMessageCount(): int
    {
        return $this->deletedMessageCount;
    }

    public function getBannedUserCount(): int
    {
        return $this->bannedUserCount;
    }

    public function getRestrictedUserCount(): int
    {
        return $this->restrictedUserCount;
    }
}
