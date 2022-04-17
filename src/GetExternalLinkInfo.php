<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Returns information about an action to be done when the current user clicks an external link. Don't use this method for links from secret chats if web page preview is disabled in secret chats
 */
class GetExternalLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getExternalLinkInfo';

    /**
     * The link
     *
     * @var string
     */
    protected string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }

    public static function fromArray(array $array): GetExternalLinkInfo
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
