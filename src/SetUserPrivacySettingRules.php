<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Changes user privacy settings
 */
class SetUserPrivacySettingRules extends TdFunction
{
    public const TYPE_NAME = 'setUserPrivacySettingRules';

    /**
     * The privacy setting
     *
     * @var UserPrivacySetting
     */
    protected UserPrivacySetting $setting;

    /**
     * The new privacy rules
     *
     * @var UserPrivacySettingRules
     */
    protected UserPrivacySettingRules $rules;

    public function __construct(UserPrivacySetting $setting, UserPrivacySettingRules $rules)
    {
        $this->setting = $setting;
        $this->rules = $rules;
    }

    public static function fromArray(array $array): SetUserPrivacySettingRules
    {
        return new static(
            TdSchemaRegistry::fromArray($array['setting']),
            TdSchemaRegistry::fromArray($array['rules']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'setting' => $this->setting->typeSerialize(),
            'rules' => $this->rules->typeSerialize(),
        ];
    }

    public function getSetting(): UserPrivacySetting
    {
        return $this->setting;
    }

    public function getRules(): UserPrivacySettingRules
    {
        return $this->rules;
    }
}
