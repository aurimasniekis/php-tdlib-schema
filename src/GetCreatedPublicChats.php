<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns a list of public chats of the specified type, owned by the user.
 */
class GetCreatedPublicChats extends TdFunction
{
    public const TYPE_NAME = 'getCreatedPublicChats';

    /**
     * Type of the public chats to return.
     */
    protected PublicChatType $type;

    public function __construct(PublicChatType $type)
    {
        $this->type = $type;
    }

    public static function fromArray(array $array): GetCreatedPublicChats
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->typeSerialize(),
        ];
    }

    public function getType(): PublicChatType
    {
        return $this->type;
    }
}
