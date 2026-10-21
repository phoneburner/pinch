<?php

declare(strict_types=1);

namespace PhoneBurner\Pinch\Component\Http\Response\Exceptional;

use PhoneBurner\Pinch\Component\Http\Domain\HttpReasonPhrase;
use PhoneBurner\Pinch\Component\Http\Domain\HttpStatus;

class DeadRouteResponse extends GenericHttpExceptionResponse
{
    #[\Override]
    protected int $status_code = HttpStatus::GONE;
    #[\Override]
    protected string|null $http_reason_phrase = HttpReasonPhrase::GONE;
    #[\Override]
    protected string $title = 'No Longer Supported';
    #[\Override]
    protected string $detail = 'The functionality formerly provided at this address is no longer supported.';
}
