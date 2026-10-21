<?php

declare(strict_types=1);

namespace PhoneBurner\Pinch\Component\Http\Response\Exceptional;

use PhoneBurner\Pinch\Component\Http\Domain\HttpReasonPhrase;
use PhoneBurner\Pinch\Component\Http\Domain\HttpStatus;

class NotFoundResponse extends GenericHttpExceptionResponse
{
    #[\Override]
    protected int $status_code = HttpStatus::NOT_FOUND;
    #[\Override]
    protected string $title = HttpReasonPhrase::NOT_FOUND;
    #[\Override]
    protected string $detail = HttpReasonPhrase::NOT_FOUND;
    #[\Override]
    protected string|null $http_reason_phrase = HttpReasonPhrase::NOT_FOUND;
}
