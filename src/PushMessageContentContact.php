<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A message with a user contact
 */
class PushMessageContentContact extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentContact';

    /**
     * Contact's name
     *
     * @var string
     */
    protected string $name;

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(string $name, bool $isPinned)
    {
        parent::__construct();

        $this->name = $name;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentContact
    {
        return new static(
            $array['name'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
