<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    protected $fillable = ['name'];

    protected static function booted()
    {
        static::deleting(function ($photo) {
            $disk = 'public';

            if ($photo->name && Storage::disk($disk)->exists($photo->name)) {
                Storage::disk($disk)->delete($photo->name);
            }
        });
    }
}
