<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a language pack. Call getLanguagePackInfo with the given language pack identifier to process the link
 */
class InternalLinkTypeLanguagePack extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeLanguagePack';

    /**
     * Language pack identifier
     *
     * @var string
     */
    protected string $languagePackId;

    public function __construct(string $languagePackId)
    {
        parent::__construct();

        $this->languagePackId = $languagePackId;
    }

    public static function fromArray(array $array): InternalLinkTypeLanguagePack
    {
        return new static(
            $array['language_pack_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
        ];
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }
}
