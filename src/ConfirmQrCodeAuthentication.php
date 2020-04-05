<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * Confirms QR code authentication on another device. Returns created session on success.
 */
class ConfirmQrCodeAuthentication extends TdFunction
{
    public const TYPE_NAME = 'confirmQrCodeAuthentication';

    /**
     * A link from a QR code. The link must be scanned by the in-app camera.
     *
     * @var string
     */
    protected string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }

    public static function fromArray(array $array): ConfirmQrCodeAuthentication
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
