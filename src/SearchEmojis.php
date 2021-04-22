<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches for emojis by keywords. Supported only if the file database is enabled.
 */
class SearchEmojis extends TdFunction
{
    public const TYPE_NAME = 'searchEmojis';

    /**
     * Text to search for.
     */
    protected string $text;

    /**
     * True, if only emojis, which exactly match text needs to be returned.
     */
    protected bool $exactMatch;

    /**
     * List of possible IETF language tags of the user's input language; may be empty if unknown.
     *
     * @var string[]
     */
    protected array $inputLanguageCodes;

    public function __construct(string $text, bool $exactMatch, array $inputLanguageCodes)
    {
        $this->text               = $text;
        $this->exactMatch         = $exactMatch;
        $this->inputLanguageCodes = $inputLanguageCodes;
    }

    public static function fromArray(array $array): SearchEmojis
    {
        return new static(
            $array['text'],
            $array['exact_match'],
            $array['input_language_codes'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'text'                 => $this->text,
            'exact_match'          => $this->exactMatch,
            'input_language_codes' => $this->inputLanguageCodes,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getExactMatch(): bool
    {
        return $this->exactMatch;
    }

    public function getInputLanguageCodes(): array
    {
        return $this->inputLanguageCodes;
    }
}
