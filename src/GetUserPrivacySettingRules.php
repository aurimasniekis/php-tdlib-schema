<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns the current privacy settings.
 */
class GetUserPrivacySettingRules extends TdFunction
{
    public const TYPE_NAME = 'getUserPrivacySettingRules';

    /**
     * The privacy setting.
     *
     * @var UserPrivacySetting
     */
    protected UserPrivacySetting $setting;

    public function __construct(UserPrivacySetting $setting)
    {
        $this->setting = $setting;
    }

    public static function fromArray(array $array): GetUserPrivacySettingRules
    {
        return new static(
            TdSchemaRegistry::fromArray($array['setting']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'setting' => $this->setting->typeSerialize(),
        ];
    }

    public function getSetting(): UserPrivacySetting
    {
        return $this->setting;
    }
}
