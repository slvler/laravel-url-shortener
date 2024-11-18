<?php

namespace Slvler\Cuttly\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
class MissingApiKey extends InvalidArgumentException
{
    public static function create(): self
    {
        return new self(
            'The Cuttly API Key is missing. Please publish the [cuttly.php] configuration file and set the [api_key].'
        );
    }
}
