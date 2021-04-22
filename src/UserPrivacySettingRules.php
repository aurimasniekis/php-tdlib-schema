<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A list of privacy rules. Rules are matched in the specified order. The first matched rule defines the privacy setting for a given user. If no rule matches, the action is not allowed.
 */
class UserPrivacySettingRules extends TdObject
{
    public const TYPE_NAME = 'userPrivacySettingRules';

    /**
     * A list of rules.
     *
     * @var UserPrivacySettingRule[]
     */
    protected array $rules;

    public function __construct(array $rules)
    {
        $this->rules = $rules;
    }

    public static function fromArray(array $array): UserPrivacySettingRules
    {
        return new static(
            array_map(fn ($x) => TdSchemaRegistry::fromArray($x), $array['rules']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            array_map(fn ($x) => $x->typeSerialize(), $this->rules),
        ];
    }

    public function getRules(): array
    {
        return $this->rules;
    }
}
