<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is a link to a video chat. Call searchPublicChat with the given chat username, and then joinGoupCall with the given invite hash to process the link
 */
class InternalLinkTypeVideoChat extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeVideoChat';

    /**
     * Username of the chat with the video chat
     *
     * @var string
     */
    protected string $chatUsername;

    /**
     * If non-empty, invite hash to be used to join the video chat without being muted by administrators
     *
     * @var string
     */
    protected string $inviteHash;

    /**
     * True, if the video chat is expected to be a live stream in a channel or a broadcast group
     *
     * @var bool
     */
    protected bool $isLiveStream;

    public function __construct(string $chatUsername, string $inviteHash, bool $isLiveStream)
    {
        parent::__construct();

        $this->chatUsername = $chatUsername;
        $this->inviteHash = $inviteHash;
        $this->isLiveStream = $isLiveStream;
    }

    public static function fromArray(array $array): InternalLinkTypeVideoChat
    {
        return new static(
            $array['chat_username'],
            $array['invite_hash'],
            $array['is_live_stream'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_username' => $this->chatUsername,
            'invite_hash' => $this->inviteHash,
            'is_live_stream' => $this->isLiveStream,
        ];
    }

    public function getChatUsername(): string
    {
        return $this->chatUsername;
    }

    public function getInviteHash(): string
    {
        return $this->inviteHash;
    }

    public function getIsLiveStream(): bool
    {
        return $this->isLiveStream;
    }
}
