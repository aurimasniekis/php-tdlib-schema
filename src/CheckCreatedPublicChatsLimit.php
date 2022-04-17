<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Checks whether the maximum number of owned public chats has been reached. Returns corresponding error if the limit was reached
 */
class CheckCreatedPublicChatsLimit extends TdFunction
{
    public const TYPE_NAME = 'checkCreatedPublicChatsLimit';

    /**
     * Type of the public chats, for which to check the limit
     *
     * @var PublicChatType
     */
    protected PublicChatType $type;

    public function __construct(PublicChatType $type)
    {
        $this->type = $type;
    }

    public static function fromArray(array $array): CheckCreatedPublicChatsLimit
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
        ];
    }

    public function getType(): PublicChatType
    {
        return $this->type;
    }
}
