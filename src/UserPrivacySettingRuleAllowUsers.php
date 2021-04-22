<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A rule to allow certain specified users to do something.
 */
class UserPrivacySettingRuleAllowUsers extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleAllowUsers';

    /**
     * The user identifiers, total number of users in all rules must not exceed 1000.
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(array $userIds)
    {
        parent::__construct();

        $this->userIds = $userIds;
    }

    public static function fromArray(array $array): UserPrivacySettingRuleAllowUsers
    {
        return new static(
            $array['user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'user_ids' => $this->userIds,
        ];
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }
}
