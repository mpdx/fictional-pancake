<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Quit extends Model
{
    protected $guarded = [];

    public static function getLatest()
    {
        return self::all()->sortByDesc(self::CREATED_AT)->first();
    }

    public static function didSomeoneThisWeek()
    {
        if (!$latest = self::getLatest()) {
            return false;
        }

        return (bool)$latest->created_at->gte(Carbon::now()->startOfWeek());
    }
}
