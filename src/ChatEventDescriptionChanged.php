<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The chat description was changed.
 */
class ChatEventDescriptionChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventDescriptionChanged';

    /**
     * Previous chat description.
     *
     * @var string
     */
    protected string $oldDescription;

    /**
     * New chat description.
     *
     * @var string
     */
    protected string $newDescription;

    public function __construct(string $oldDescription, string $newDescription)
    {
        parent::__construct();

        $this->oldDescription = $oldDescription;
        $this->newDescription = $newDescription;
    }

    public static function fromArray(array $array): ChatEventDescriptionChanged
    {
        return new static(
            $array['old_description'],
            $array['new_description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'old_description' => $this->oldDescription,
            'new_description' => $this->newDescription,
        ];
    }

    public function getOldDescription(): string
    {
        return $this->oldDescription;
    }

    public function getNewDescription(): string
    {
        return $this->newDescription;
    }
}
