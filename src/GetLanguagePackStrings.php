<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns strings from a language pack in the current localization target by their keys. Can be called before authorization.
 */
class GetLanguagePackStrings extends TdFunction
{
    public const TYPE_NAME = 'getLanguagePackStrings';

    /**
     * Language pack identifier of the strings to be returned.
     */
    protected string $languagePackId;

    /**
     * Language pack keys of the strings to be returned; leave empty to request all available strings.
     *
     * @var string[]
     */
    protected array $keys;

    public function __construct(string $languagePackId, array $keys)
    {
        $this->languagePackId = $languagePackId;
        $this->keys           = $keys;
    }

    public static function fromArray(array $array): GetLanguagePackStrings
    {
        return new static(
            $array['language_pack_id'],
            $array['keys'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
            'keys'             => $this->keys,
        ];
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function getKeys(): array
    {
        return $this->keys;
    }
}
