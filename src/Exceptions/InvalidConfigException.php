<?php

namespace LaravelFlux\Fixture\Exceptions;

use Exception;

/**
 * Class InvalidConfigException represents an exception caused by incorrect object configuration.
 *
 * @package LaravelFlux\Fixture\Exceptions
 */
class InvalidConfigException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Configuration';
    }
}
