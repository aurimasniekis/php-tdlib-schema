<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The parameters of animation search through GetOption("animation_search_bot_username") bot has changed
 */
class UpdateAnimationSearchParameters extends Update
{
    public const TYPE_NAME = 'updateAnimationSearchParameters';

    /**
     * Name of the animation search provider
     *
     * @var string
     */
    protected string $provider;

    /**
     * The new list of emojis suggested for searching
     *
     * @var string[]
     */
    protected array $emojis;

    public function __construct(string $provider, array $emojis)
    {
        parent::__construct();

        $this->provider = $provider;
        $this->emojis = $emojis;
    }

    public static function fromArray(array $array): UpdateAnimationSearchParameters
    {
        return new static(
            $array['provider'],
            $array['emojis'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'provider' => $this->provider,
            'emojis' => $this->emojis,
        ];
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }
}
