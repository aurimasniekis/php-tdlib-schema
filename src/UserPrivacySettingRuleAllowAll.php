<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A rule to allow all users to do something
 */
class UserPrivacySettingRuleAllowAll extends UserPrivacySettingRule
{
    public const TYPE_NAME = 'userPrivacySettingRuleAllowAll';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UserPrivacySettingRuleAllowAll
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
