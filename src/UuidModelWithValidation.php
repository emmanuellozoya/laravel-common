<?php namespace Elozoya\LaravelCommon;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;
use Eloquence\Behaviours\Uuid;

/*
 * UuidModelWithValidation
 * =======================
 *
 */
class UuidModelWithValidation extends Model
{
    use ValidatingTrait;

    /*
     * UUID as id
     */
    use Uuid;
    public $incrementing = false;
}
