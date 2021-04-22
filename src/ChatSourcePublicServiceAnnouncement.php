<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat contains a public service announcement.
 */
class ChatSourcePublicServiceAnnouncement extends ChatSource
{
    public const TYPE_NAME = 'chatSourcePublicServiceAnnouncement';

    /**
     * The type of the announcement.
     */
    protected string $type;

    /**
     * The text of the announcement.
     */
    protected string $text;

    public function __construct(string $type, string $text)
    {
        parent::__construct();

        $this->type = $type;
        $this->text = $text;
    }

    public static function fromArray(array $array): ChatSourcePublicServiceAnnouncement
    {
        return new static(
            $array['type'],
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type,
            'text'  => $this->text,
        ];
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
