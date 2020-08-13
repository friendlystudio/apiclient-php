<?php

namespace Voximplant\Resources\Params;

class A2PSendSmsParams
{
    /** @var string The source phone number. */
    public $src_number;

    /** @var string The destination phone numbers. */
    public $dst_numbers;

    /** @var string The message text, up to 1600 characters. */
    public $text;
}