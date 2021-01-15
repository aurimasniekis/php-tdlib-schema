<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A rich text email link.
 */
class RichTextEmailAddress extends RichText
{
    public const TYPE_NAME = 'richTextEmailAddress';

    /**
     * Text.
     */
    protected RichText $text;

    /**
     * Email address.
     */
    protected string $emailAddress;

    public function __construct(RichText $text, string $emailAddress)
    {
        parent::__construct();

        $this->text         = $text;
        $this->emailAddress = $emailAddress;
    }

    public static function fromArray(array $array): RichTextEmailAddress
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['email_address'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'text'          => $this->text->typeSerialize(),
            'email_address' => $this->emailAddress,
        ];
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
}
