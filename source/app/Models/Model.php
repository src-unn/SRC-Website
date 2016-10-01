<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/19/2016
 * Time:    4:34 AM
 **/

namespace App\Models;

use App\Models\Traits\Validates;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class Model
 * @package App\Models
 */
abstract class Model extends EloquentModel
{
    use Validates;
}