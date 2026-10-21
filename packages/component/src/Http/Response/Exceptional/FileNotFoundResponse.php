<?php

declare(strict_types=1);

namespace PhoneBurner\Pinch\Component\Http\Response\Exceptional;

class FileNotFoundResponse extends NotFoundResponse
{
    #[\Override]
    protected string $title = "File Not Found";
    #[\Override]
    protected string $detail = 'The file requested could not be found.';
}
