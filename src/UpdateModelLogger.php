<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.04.19
 * Time: 23:18
 */
namespace Alexkovt\UpdateModelLogger;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

trait UpdateModelLogger
{
    public static function bootUpdateModelLogger()
    {
        static::updated(function (Model $model){
            $table = $model->getTable();
            $changes = $model->getChanges();

            return Log::info('Table ' . $table . ' was updated', $changes);
        });
    }
}