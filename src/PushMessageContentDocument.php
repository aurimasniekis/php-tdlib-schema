<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A document message (a general file).
 */
class PushMessageContentDocument extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentDocument';

    /**
     * Message content; may be null.
     *
     * @var Document|null
     */
    protected ?Document $document;

    /**
     * True, if the message is a pinned message with the specified content.
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(?Document $document, bool $isPinned)
    {
        parent::__construct();

        $this->document = $document;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentDocument
    {
        return new static(
            (null !== $array['document'] ? TdSchemaRegistry::fromArray($array['document']) : null),
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'document'  => (null !== $this->document ? $this->document : null),
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
