<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Creates a new call
 */
class CreateCall extends TdFunction
{
    public const TYPE_NAME = 'createCall';

    /**
     * Identifier of the user to be called
     *
     * @var int
     */
    protected int $userId;

    /**
     * Description of the call protocols supported by the application
     *
     * @var CallProtocol
     */
    protected CallProtocol $protocol;

    /**
     * True, if a video call needs to be created
     *
     * @var bool
     */
    protected bool $isVideo;

    public function __construct(int $userId, CallProtocol $protocol, bool $isVideo)
    {
        $this->userId = $userId;
        $this->protocol = $protocol;
        $this->isVideo = $isVideo;
    }

    public static function fromArray(array $array): CreateCall
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['protocol']),
            $array['is_video'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'protocol' => $this->protocol->typeSerialize(),
            'is_video' => $this->isVideo,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getProtocol(): CallProtocol
    {
        return $this->protocol;
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }
}
