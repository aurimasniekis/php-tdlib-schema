<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace AurimasNiekis\TdLibSchema;

/**
 * The user needs to confirm authorization on another logged in device by scanning a QR code with the provided link.
 */
class AuthorizationStateWaitOtherDeviceConfirmation extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitOtherDeviceConfirmation';

    /**
     * A tg:// URL for the QR code. The link will be updated frequently.
     *
     * @var string
     */
    protected string $link;

    public function __construct(string $link)
    {
        parent::__construct();

        $this->link = $link;
    }

    public static function fromArray(array $array): AuthorizationStateWaitOtherDeviceConfirmation
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
