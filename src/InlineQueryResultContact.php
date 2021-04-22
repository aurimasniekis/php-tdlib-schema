<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Represents a user contact.
 */
class InlineQueryResultContact extends InlineQueryResult
{
    public const TYPE_NAME = 'inlineQueryResultContact';

    /**
     * Unique identifier of the query result.
     */
    protected string $id;

    /**
     * A user contact.
     */
    protected Contact $contact;

    /**
     * Result thumbnail in JPEG format; may be null.
     */
    protected ?Thumbnail $thumbnail;

    public function __construct(string $id, Contact $contact, ?Thumbnail $thumbnail)
    {
        parent::__construct();

        $this->id        = $id;
        $this->contact   = $contact;
        $this->thumbnail = $thumbnail;
    }

    public static function fromArray(array $array): InlineQueryResultContact
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['contact']),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'contact'   => $this->contact->typeSerialize(),
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }
}
