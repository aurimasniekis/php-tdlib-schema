<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user is uploading a video
 */
class ChatActionUploadingVideo extends ChatAction
{
    public const TYPE_NAME = 'chatActionUploadingVideo';

    /**
     * Upload progress, as a percentage
     *
     * @var int
     */
    protected int $progress;

    public function __construct(int $progress)
    {
        parent::__construct();

        $this->progress = $progress;
    }

    public static function fromArray(array $array): ChatActionUploadingVideo
    {
        return new static(
            $array['progress'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'progress' => $this->progress,
        ];
    }

    public function getProgress(): int
    {
        return $this->progress;
    }
}
