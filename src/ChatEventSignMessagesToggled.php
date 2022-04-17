<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The sign_messages setting of a channel was toggled
 */
class ChatEventSignMessagesToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventSignMessagesToggled';

    /**
     * New value of sign_messages
     *
     * @var bool
     */
    protected bool $signMessages;

    public function __construct(bool $signMessages)
    {
        parent::__construct();

        $this->signMessages = $signMessages;
    }

    public static function fromArray(array $array): ChatEventSignMessagesToggled
    {
        return new static(
            $array['sign_messages'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sign_messages' => $this->signMessages,
        ];
    }

    public function getSignMessages(): bool
    {
        return $this->signMessages;
    }
}
