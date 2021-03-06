<?php

/**
 * This file is part of the Version package.
 *
 * Copyright (c) Nikola Posa <posa.nikola@gmail.com>
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

namespace Version\Exception;

/**
 * @author Nikola Posa <posa.nikola@gmail.com>
 */
class InvalidVersionElementException extends InvalidArgumentException
{
    public static function forElement($element)
    {
        return new self(sprintf(
            '%s version must be non-negative integer',
            ucfirst($element)
        ));
    }
}
