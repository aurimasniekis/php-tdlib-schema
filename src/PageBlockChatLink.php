<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A link to a chat.
 */
class PageBlockChatLink extends PageBlock
{
    public const TYPE_NAME = 'pageBlockChatLink';

    /**
     * Chat title.
     *
     * @var string
     */
    protected string $title;

    /**
     * Chat photo; may be null.
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $photo;

    /**
     * Chat username, by which all other information about the chat should be resolved.
     *
     * @var string
     */
    protected string $username;

    public function __construct(string $title, ?ChatPhoto $photo, string $username)
    {
        parent::__construct();

        $this->title    = $title;
        $this->photo    = $photo;
        $this->username = $username;
    }

    public static function fromArray(array $array): PageBlockChatLink
    {
        return new static(
            $array['title'],
            (null !== $array['photo'] ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['username'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'title'    => $this->title,
            'photo'    => (null !== $this->photo ? $this->photo : null),
            'username' => $this->username,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
