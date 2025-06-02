<?php
/**
 *   Copyright (C) 2025  Kuno Woudt <kuno@frob.nl>
 *
 *   This program is free software: you can redistribute it and/or modify it under the
 *   terms of the GNU Affero General Public License as published by the Free Software
 *   Foundation, either version 3 of the License, or (at your option) any later version.
 *
 *   SPDX-License-Identifier: AGPL-3.0-or-later
 */

declare(strict_types=1);

namespace WebauthnEmulator;

class text
{
    public static function base64url_encode(string $string): string
    {
        return rtrim(strtr(base64_encode($string), '+/', '-_'), '=');
    }

    public static function base64url_decode(string $string)
    {
        return base64_decode(str_replace(['-', '_'], ['+', '/'], $string));
    }
}
