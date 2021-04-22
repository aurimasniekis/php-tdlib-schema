<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A non-standard action has happened in the chat.
 */
class MessageCustomServiceAction extends MessageContent
{
    public const TYPE_NAME = 'messageCustomServiceAction';

    /**
     * Message text to be shown in the chat.
     */
    protected string $text;

    public function __construct(string $text)
    {
        parent::__construct();

        $this->text = $text;
    }

    public static function fromArray(array $array): MessageCustomServiceAction
    {
        return new static(
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }
}
