<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Adds, edits or deletes a string in a custom local language pack. Can be called before authorization
 */
class SetCustomLanguagePackString extends TdFunction
{
    public const TYPE_NAME = 'setCustomLanguagePackString';

    /**
     * Identifier of a previously added custom local language pack in the current localization target
     *
     * @var string
     */
    protected string $languagePackId;

    /**
     * New language pack string
     *
     * @var LanguagePackString
     */
    protected LanguagePackString $newString;

    public function __construct(string $languagePackId, LanguagePackString $newString)
    {
        $this->languagePackId = $languagePackId;
        $this->newString = $newString;
    }

    public static function fromArray(array $array): SetCustomLanguagePackString
    {
        return new static(
            $array['language_pack_id'],
            TdSchemaRegistry::fromArray($array['new_string']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
            'new_string' => $this->newString->typeSerialize(),
        ];
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function getNewString(): LanguagePackString
    {
        return $this->newString;
    }
}
