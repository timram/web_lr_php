<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    protected $table = 'blog';

    protected $fillable = [
        'text', 'subject', 'path_to_image'
    ];

    public static function getRecordsForPagination($offset, $limit) {
        return static::take($limit)
            ->skip($offset)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public static function getTotalAmount() {
        return static::all()->count();
    }
}
