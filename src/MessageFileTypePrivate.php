<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The messages was exported from a private chat
 */
class MessageFileTypePrivate extends MessageFileType
{
    public const TYPE_NAME = 'messageFileTypePrivate';

    /**
     * Name of the other party; may be empty if unrecognized
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name)
    {
        parent::__construct();

        $this->name = $name;
    }

    public static function fromArray(array $array): MessageFileTypePrivate
    {
        return new static(
            $array['name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
        ];
    }

    public function getName(): string
    {
        return $this->name;
    }
}
