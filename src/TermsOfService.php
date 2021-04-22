<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains Telegram terms of service.
 */
class TermsOfService extends TdObject
{
    public const TYPE_NAME = 'termsOfService';

    /**
     * Text of the terms of service.
     */
    protected FormattedText $text;

    /**
     * The minimum age of a user to be able to accept the terms; 0 if any.
     */
    protected int $minUserAge;

    /**
     * True, if a blocking popup with terms of service must be shown to the user.
     */
    protected bool $showPopup;

    public function __construct(FormattedText $text, int $minUserAge, bool $showPopup)
    {
        $this->text       = $text;
        $this->minUserAge = $minUserAge;
        $this->showPopup  = $showPopup;
    }

    public static function fromArray(array $array): TermsOfService
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['min_user_age'],
            $array['show_popup'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'text'         => $this->text->typeSerialize(),
            'min_user_age' => $this->minUserAge,
            'show_popup'   => $this->showPopup,
        ];
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getMinUserAge(): int
    {
        return $this->minUserAge;
    }

    public function getShowPopup(): bool
    {
        return $this->showPopup;
    }
}
