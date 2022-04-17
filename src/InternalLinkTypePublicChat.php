<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a chat by its username. Call searchPublicChat with the given chat username to process the link
 */
class InternalLinkTypePublicChat extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePublicChat';

    /**
     * Username of the chat
     *
     * @var string
     */
    protected string $chatUsername;

    public function __construct(string $chatUsername)
    {
        parent::__construct();

        $this->chatUsername = $chatUsername;
    }

    public static function fromArray(array $array): InternalLinkTypePublicChat
    {
        return new static(
            $array['chat_username'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_username' => $this->chatUsername,
        ];
    }

    public function getChatUsername(): string
    {
        return $this->chatUsername;
    }
}
