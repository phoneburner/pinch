<?php

declare(strict_types=1);

namespace PhoneBurner\Pinch\Component\Http\Response\Exceptional;

class PageNotFoundResponse extends NotFoundResponse
{
    #[\Override]
    protected string $title = "Page Not Found";
    #[\Override]
    protected string $detail = 'The requested page could not be found.';
}
