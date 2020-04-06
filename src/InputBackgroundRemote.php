<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * A background from the server.
 */
class InputBackgroundRemote extends InputBackground
{
    public const TYPE_NAME = 'inputBackgroundRemote';

    /**
     * The background identifier.
     *
     * @var string
     */
    protected string $backgroundId;

    public function __construct(string $backgroundId)
    {
        parent::__construct();

        $this->backgroundId = $backgroundId;
    }

    public static function fromArray(array $array): InputBackgroundRemote
    {
        return new static(
            $array['background_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'background_id' => $this->backgroundId,
        ];
    }

    public function getBackgroundId(): string
    {
        return $this->backgroundId;
    }
}
