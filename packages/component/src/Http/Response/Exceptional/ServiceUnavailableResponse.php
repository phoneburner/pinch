<?php

declare(strict_types=1);

namespace PhoneBurner\Pinch\Component\Http\Response\Exceptional;

use PhoneBurner\Pinch\Component\Http\Domain\HttpReasonPhrase;
use PhoneBurner\Pinch\Component\Http\Domain\HttpStatus;

class ServiceUnavailableResponse extends GenericHttpExceptionResponse
{
    #[\Override]
    protected int $status_code = HttpStatus::SERVICE_UNAVAILABLE;
    #[\Override]
    protected string $title = HttpReasonPhrase::SERVICE_UNAVAILABLE;
}
