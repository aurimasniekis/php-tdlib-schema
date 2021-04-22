<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains an HTTPS link to a message in a supergroup or channel.
 */
class MessageLink extends TdObject
{
    public const TYPE_NAME = 'messageLink';

    /**
     * Message link.
     */
    protected string $link;

    /**
     * True, if the link will work for non-members of the chat.
     */
    protected bool $isPublic;

    public function __construct(string $link, bool $isPublic)
    {
        $this->link     = $link;
        $this->isPublic = $isPublic;
    }

    public static function fromArray(array $array): MessageLink
    {
        return new static(
            $array['link'],
            $array['is_public'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'link'      => $this->link,
            'is_public' => $this->isPublic,
        ];
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }
}
