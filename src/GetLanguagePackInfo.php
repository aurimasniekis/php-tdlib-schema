<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a language pack. Returned language pack identifier may be different from a provided one. Can be called before authorization.
 */
class GetLanguagePackInfo extends TdFunction
{
    public const TYPE_NAME = 'getLanguagePackInfo';

    /**
     * Language pack identifier.
     *
     * @var string
     */
    protected string $languagePackId;

    public function __construct(string $languagePackId)
    {
        $this->languagePackId = $languagePackId;
    }

    public static function fromArray(array $array): GetLanguagePackInfo
    {
        return new static(
            $array['language_pack_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
        ];
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }
}
