<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Searches a public chat by its username. Currently only private chats, supergroups and channels can be public. Returns the chat if found; otherwise an error is returned
 */
class SearchPublicChat extends TdFunction
{
    public const TYPE_NAME = 'searchPublicChat';

    /**
     * Username to be resolved
     *
     * @var string
     */
    protected string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public static function fromArray(array $array): SearchPublicChat
    {
        return new static(
            $array['username'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'username' => $this->username,
        ];
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
