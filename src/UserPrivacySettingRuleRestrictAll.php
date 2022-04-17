<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A rule to restrict all users from doing something
 */
class UserPrivacySettingRuleRestrictAll extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleRestrictAll';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingRuleRestrictAll
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
