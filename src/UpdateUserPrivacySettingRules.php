<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Some privacy setting rules have been changed.
 */
class UpdateUserPrivacySettingRules extends Update
{
    public const TYPE_NAME = 'updateUserPrivacySettingRules';

    /**
     * The privacy setting.
     *
     * @var UserPrivacySetting
     */
    protected UserPrivacySetting $setting;

    /**
     * New privacy rules.
     *
     * @var UserPrivacySettingRules
     */
    protected UserPrivacySettingRules $rules;

    public function __construct(UserPrivacySetting $setting, UserPrivacySettingRules $rules)
    {
        parent::__construct();

        $this->setting = $setting;
        $this->rules   = $rules;
    }

    public static function fromArray(array $array): UpdateUserPrivacySettingRules
    {
        return new static(
            TdSchemaRegistry::fromArray($array['setting']),
            TdSchemaRegistry::fromArray($array['rules']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'setting' => $this->setting->typeSerialize(),
            'rules'   => $this->rules->typeSerialize(),
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
