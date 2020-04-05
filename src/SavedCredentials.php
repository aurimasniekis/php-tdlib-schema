<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains information about saved card credentials.
 */
class SavedCredentials extends TdObject
{
    public const TYPE_NAME = 'savedCredentials';

    /**
     * Unique identifier of the saved credentials.
     *
     * @var string
     */
    protected string $id;

    /**
     * Title of the saved credentials.
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $id, string $title)
    {
        $this->id    = $id;
        $this->title = $title;
    }

    public static function fromArray(array $array): SavedCredentials
    {
        return new static(
            $array['id'],
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
            'title' => $this->title,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
