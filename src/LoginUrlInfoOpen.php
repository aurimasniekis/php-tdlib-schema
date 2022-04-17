<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * An HTTP url needs to be open
 */
class LoginUrlInfoOpen extends LoginUrlInfo
{
    public const TYPE_NAME = 'loginUrlInfoOpen';

    /**
     * The URL to open
     *
     * @var string
     */
    protected string $url;

    /**
     * True, if there is no need to show an ordinary open URL confirm
     *
     * @var bool
     */
    protected bool $skipConfirm;

    public function __construct(string $url, bool $skipConfirm)
    {
        parent::__construct();

        $this->url = $url;
        $this->skipConfirm = $skipConfirm;
    }

    public static function fromArray(array $array): LoginUrlInfoOpen
    {
        return new static(
            $array['url'],
            $array['skip_confirm'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
            'skip_confirm' => $this->skipConfirm,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getSkipConfirm(): bool
    {
        return $this->skipConfirm;
    }
}
