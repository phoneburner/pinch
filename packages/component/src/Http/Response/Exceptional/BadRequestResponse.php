<?php

declare(strict_types=1);

namespace PhoneBurner\Pinch\Component\Http\Response\Exceptional;

use PhoneBurner\Pinch\Component\Http\Domain\HttpReasonPhrase;
use PhoneBurner\Pinch\Component\Http\Domain\HttpStatus;

class BadRequestResponse extends GenericHttpExceptionResponse
{
    #[\Override]
    protected int $status_code = HttpStatus::BAD_REQUEST;
    #[\Override]
    protected string $title = HttpReasonPhrase::BAD_REQUEST;
    #[\Override]
    protected string $detail = 'The request could not be understood by the server due to malformed syntax or invalid content.';
}
