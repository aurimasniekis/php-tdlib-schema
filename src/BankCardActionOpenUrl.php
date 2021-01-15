<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes an action associated with a bank card number.
 */
class BankCardActionOpenUrl extends TdObject
{
    public const TYPE_NAME = 'bankCardActionOpenUrl';

    /**
     * Action text.
     */
    protected string $text;

    /**
     * The URL to be opened.
     */
    protected string $url;

    public function __construct(string $text, string $url)
    {
        $this->text = $text;
        $this->url  = $url;
    }

    public static function fromArray(array $array): BankCardActionOpenUrl
    {
        return new static(
            $array['text'],
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
            'url'   => $this->url,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
