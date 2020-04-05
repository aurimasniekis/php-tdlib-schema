<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains a public HTTPS link to a message in a supergroup or channel with a username.
 */
class PublicMessageLink extends TdObject
{
    public const TYPE_NAME = 'publicMessageLink';

    /**
     * Message link.
     *
     * @var string
     */
    protected string $link;

    /**
     * HTML-code for embedding the message.
     *
     * @var string
     */
    protected string $html;

    public function __construct(string $link, string $html)
    {
        $this->link = $link;
        $this->html = $html;
    }

    public static function fromArray(array $array): PublicMessageLink
    {
        return new static(
            $array['link'],
            $array['html'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link'  => $this->link,
            'html'  => $this->html,
        ];
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getHtml(): string
    {
        return $this->html;
    }
}
