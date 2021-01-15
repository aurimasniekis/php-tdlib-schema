<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Fetches the latest versions of all strings from a language pack in the current localization target from the server. This method doesn't need to be called explicitly for the current used/base language packs. Can be called before authorization.
 */
class SynchronizeLanguagePack extends TdFunction
{
    public const TYPE_NAME = 'synchronizeLanguagePack';

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

    public static function fromArray(array $array): SynchronizeLanguagePack
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
