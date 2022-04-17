<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The message was imported from an exported message history
 */
class MessageForwardOriginMessageImport extends MessageForwardOrigin
{
    public const TYPE_NAME = 'messageForwardOriginMessageImport';

    /**
     * Name of the sender
     *
     * @var string
     */
    protected string $senderName;

    public function __construct(string $senderName)
    {
        parent::__construct();

        $this->senderName = $senderName;
    }

    public static function fromArray(array $array): MessageForwardOriginMessageImport
    {
        return new static(
            $array['sender_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sender_name' => $this->senderName,
        ];
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }
}
