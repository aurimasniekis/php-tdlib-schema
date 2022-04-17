<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The link is an unknown tg: link. Call getDeepLinkInfo to process the link
 */
class InternalLinkTypeUnknownDeepLink extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeUnknownDeepLink';

    /**
     * Link to be passed to getDeepLinkInfo
     *
     * @var string
     */
    protected string $link;

    public function __construct(string $link)
    {
        parent::__construct();

        $this->link = $link;
    }

    public static function fromArray(array $array): InternalLinkTypeUnknownDeepLink
    {
        return new static(
            $array['link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link' => $this->link,
        ];
    }

    public function getLink(): string
    {
        return $this->link;
    }
}
