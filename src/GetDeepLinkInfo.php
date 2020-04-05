<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about a tg:// deep link. Use "tg://need_update_for_some_feature" or "tg:some_unsupported_feature" for testing. Returns a 404 error for unknown links. Can be called before authorization.
 */
class GetDeepLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getDeepLinkInfo';

    /**
     * The link.
     *
     * @var string
     */
    protected string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }

    public static function fromArray(array $array): GetDeepLinkInfo
    {
        return new static(
            $array['link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link'  => $this->link,
        ];
    }

    public function getLink(): string
    {
        return $this->link;
    }
}
