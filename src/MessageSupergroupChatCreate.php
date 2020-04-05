<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A newly created supergroup or channel.
 */
class MessageSupergroupChatCreate extends MessageContent
{
    public const TYPE_NAME = 'messageSupergroupChatCreate';

    /**
     * Title of the supergroup or channel.
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $title)
    {
        parent::__construct();

        $this->title = $title;
    }

    public static function fromArray(array $array): MessageSupergroupChatCreate
    {
        return new static(
            $array['title'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
        ];
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
