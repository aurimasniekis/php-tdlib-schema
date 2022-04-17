<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Describes a chat background
 */
class Background extends TdObject
{
    public const TYPE_NAME = 'background';

    /**
     * Unique background identifier
     *
     * @var string
     */
    protected string $id;

    /**
     * True, if this is one of default backgrounds
     *
     * @var bool
     */
    protected bool $isDefault;

    /**
     * True, if the background is dark and is recommended to be used with dark theme
     *
     * @var bool
     */
    protected bool $isDark;

    /**
     * Unique background name
     *
     * @var string
     */
    protected string $name;

    /**
     * Document with the background; may be null. Null only for filled backgrounds
     *
     * @var Document|null
     */
    protected ?Document $document;

    /**
     * Type of the background
     *
     * @var BackgroundType
     */
    protected BackgroundType $type;

    public function __construct(
        string $id,
        bool $isDefault,
        bool $isDark,
        string $name,
        ?Document $document,
        BackgroundType $type
    ) {
        $this->id = $id;
        $this->isDefault = $isDefault;
        $this->isDark = $isDark;
        $this->name = $name;
        $this->document = $document;
        $this->type = $type;
    }

    public static function fromArray(array $array): Background
    {
        return new static(
            $array['id'],
            $array['is_default'],
            $array['is_dark'],
            $array['name'],
            (isset($array['document']) ? TdSchemaRegistry::fromArray($array['document']) : null),
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'is_default' => $this->isDefault,
            'is_dark' => $this->isDark,
            'name' => $this->name,
            'document' => (isset($this->document) ? $this->document : null),
            'type' => $this->type->typeSerialize(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function getType(): BackgroundType
    {
        return $this->type;
    }
}
