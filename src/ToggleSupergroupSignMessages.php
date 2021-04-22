<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Toggles sender signatures messages sent in a channel; requires can_change_info administrator right.
 */
class ToggleSupergroupSignMessages extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupSignMessages';

    /**
     * Identifier of the channel.
     */
    protected int $supergroupId;

    /**
     * New value of sign_messages.
     */
    protected bool $signMessages;

    public function __construct(int $supergroupId, bool $signMessages)
    {
        $this->supergroupId = $supergroupId;
        $this->signMessages = $signMessages;
    }

    public static function fromArray(array $array): ToggleSupergroupSignMessages
    {
        return new static(
            $array['supergroup_id'],
            $array['sign_messages'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'sign_messages' => $this->signMessages,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }
}
