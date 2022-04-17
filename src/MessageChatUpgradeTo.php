<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A basic group was upgraded to a supergroup and was deactivated as the result
 */
class MessageChatUpgradeTo extends MessageContent
{
    public const TYPE_NAME = 'messageChatUpgradeTo';

    /**
     * Identifier of the supergroup to which the basic group was upgraded
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId)
    {
        parent::__construct();

        $this->supergroupId = $supergroupId;
    }

    public static function fromArray(array $array): MessageChatUpgradeTo
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }
}
