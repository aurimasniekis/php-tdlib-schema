<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Contains full information about a user
 */
class UserFullInfo extends TdObject
{
    public const TYPE_NAME = 'userFullInfo';

    /**
     * User profile photo; may be null
     *
     * @var ChatPhoto|null
     */
    protected ?ChatPhoto $photo;

    /**
     * True, if the user is blocked by the current user
     *
     * @var bool
     */
    protected bool $isBlocked;

    /**
     * True, if the user can be called
     *
     * @var bool
     */
    protected bool $canBeCalled;

    /**
     * True, if a video call can be created with the user
     *
     * @var bool
     */
    protected bool $supportsVideoCalls;

    /**
     * True, if the user can't be called due to their privacy settings
     *
     * @var bool
     */
    protected bool $hasPrivateCalls;

    /**
     * True, if the user can't be linked in forwarded messages due to their privacy settings
     *
     * @var bool
     */
    protected bool $hasPrivateForwards;

    /**
     * True, if the current user needs to explicitly allow to share their phone number with the user when the method addContact is used
     *
     * @var bool
     */
    protected bool $needPhoneNumberPrivacyException;

    /**
     * A short user bio
     *
     * @var string
     */
    protected string $bio;

    /**
     * For bots, the text that is shown on the bot's profile page and is sent together with the link when users share the bot
     *
     * @var string
     */
    protected string $shareText;

    /**
     * For bots, the text shown in the chat with the bot if the chat is empty
     *
     * @var string
     */
    protected string $description;

    /**
     * Number of group chats where both the other user and the current user are a member; 0 for the current user
     *
     * @var int
     */
    protected int $groupInCommonCount;

    /**
     * For bots, list of the bot commands
     *
     * @var BotCommand[]
     */
    protected array $commands;

    public function __construct(
        ?ChatPhoto $photo,
        bool $isBlocked,
        bool $canBeCalled,
        bool $supportsVideoCalls,
        bool $hasPrivateCalls,
        bool $hasPrivateForwards,
        bool $needPhoneNumberPrivacyException,
        string $bio,
        string $shareText,
        string $description,
        int $groupInCommonCount,
        array $commands
    ) {
        $this->photo = $photo;
        $this->isBlocked = $isBlocked;
        $this->canBeCalled = $canBeCalled;
        $this->supportsVideoCalls = $supportsVideoCalls;
        $this->hasPrivateCalls = $hasPrivateCalls;
        $this->hasPrivateForwards = $hasPrivateForwards;
        $this->needPhoneNumberPrivacyException = $needPhoneNumberPrivacyException;
        $this->bio = $bio;
        $this->shareText = $shareText;
        $this->description = $description;
        $this->groupInCommonCount = $groupInCommonCount;
        $this->commands = $commands;
    }

    public static function fromArray(array $array): UserFullInfo
    {
        return new static(
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['is_blocked'],
            $array['can_be_called'],
            $array['supports_video_calls'],
            $array['has_private_calls'],
            $array['has_private_forwards'],
            $array['need_phone_number_privacy_exception'],
            $array['bio'],
            $array['share_text'],
            $array['description'],
            $array['group_in_common_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['commands']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => (isset($this->photo) ? $this->photo : null),
            'is_blocked' => $this->isBlocked,
            'can_be_called' => $this->canBeCalled,
            'supports_video_calls' => $this->supportsVideoCalls,
            'has_private_calls' => $this->hasPrivateCalls,
            'has_private_forwards' => $this->hasPrivateForwards,
            'need_phone_number_privacy_exception' => $this->needPhoneNumberPrivacyException,
            'bio' => $this->bio,
            'share_text' => $this->shareText,
            'description' => $this->description,
            'group_in_common_count' => $this->groupInCommonCount,
            array_map(fn($x) => $x->typeSerialize(), $this->commands),
        ];
    }

    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    public function getIsBlocked(): bool
    {
        return $this->isBlocked;
    }

    public function getCanBeCalled(): bool
    {
        return $this->canBeCalled;
    }

    public function getSupportsVideoCalls(): bool
    {
        return $this->supportsVideoCalls;
    }

    public function getHasPrivateCalls(): bool
    {
        return $this->hasPrivateCalls;
    }

    public function getHasPrivateForwards(): bool
    {
        return $this->hasPrivateForwards;
    }

    public function getNeedPhoneNumberPrivacyException(): bool
    {
        return $this->needPhoneNumberPrivacyException;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function getShareText(): string
    {
        return $this->shareText;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getGroupInCommonCount(): int
    {
        return $this->groupInCommonCount;
    }

    public function getCommands(): array
    {
        return $this->commands;
    }
}
