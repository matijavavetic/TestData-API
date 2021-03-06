<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

final class ExceptionError extends Enum implements LocalizedEnum
{
    const ERR_PEOPLE_NOT_FOUND = "ERR_PEOPLE_NOT_FOUND";
    const ERR_PERSON_NOT_FOUND = "ERR_PERSON_NOT_FOUND";
    const ERR_CITIES_NOT_FOUND = "ERR_CITIES_NOT_FOUND";
    const ERR_COUNTRY_NOT_FOUND = "ERR_COUNTRY_NOT_FOUND";
    const ERR_COUNTRIES_NOT_FOUND = "ERR_COUNTRIES_NOT_FOUND";
    const ERR_FATAL = "ERR_FATAL";
    const ERR_CONFLICT = "ERR_CONFLICT";
}
