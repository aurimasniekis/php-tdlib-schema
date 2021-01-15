<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A rich text phone number.
 */
class RichTextPhoneNumber extends RichText
{
    public const TYPE_NAME = 'richTextPhoneNumber';

    /**
     * Text.
     */
    protected RichText $text;

    /**
     * Phone number.
     */
    protected string $phoneNumber;

    public function __construct(RichText $text, string $phoneNumber)
    {
        parent::__construct();

        $this->text        = $text;
        $this->phoneNumber = $phoneNumber;
    }

    public static function fromArray(array $array): RichTextPhoneNumber
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['phone_number'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'text'         => $this->text->typeSerialize(),
            'phone_number' => $this->phoneNumber,
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
}
