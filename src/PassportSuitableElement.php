<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about a Telegram Passport element that was requested by a service.
 */
class PassportSuitableElement extends TdObject
{
    public const TYPE_NAME = 'passportSuitableElement';

    /**
     * Type of the element.
     */
    protected PassportElementType $type;

    /**
     * True, if a selfie is required with the identity document.
     */
    protected bool $isSelfieRequired;

    /**
     * True, if a certified English translation is required with the document.
     */
    protected bool $isTranslationRequired;

    /**
     * True, if personal details must include the user's name in the language of their country of residence.
     */
    protected bool $isNativeNameRequired;

    public function __construct(
        PassportElementType $type,
        bool $isSelfieRequired,
        bool $isTranslationRequired,
        bool $isNativeNameRequired
    ) {
        $this->type                  = $type;
        $this->isSelfieRequired      = $isSelfieRequired;
        $this->isTranslationRequired = $isTranslationRequired;
        $this->isNativeNameRequired  = $isNativeNameRequired;
    }

    public static function fromArray(array $array): PassportSuitableElement
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['is_selfie_required'],
            $array['is_translation_required'],
            $array['is_native_name_required'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'type'                    => $this->type->typeSerialize(),
            'is_selfie_required'      => $this->isSelfieRequired,
            'is_translation_required' => $this->isTranslationRequired,
            'is_native_name_required' => $this->isNativeNameRequired,
        ];
    }

    public function getType(): PassportElementType
    {
        return $this->type;
    }

    public function getIsSelfieRequired(): bool
    {
        return $this->isSelfieRequired;
    }

    public function getIsTranslationRequired(): bool
    {
        return $this->isTranslationRequired;
    }

    public function getIsNativeNameRequired(): bool
    {
        return $this->isNativeNameRequired;
    }
}
