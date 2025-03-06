<?php

namespace App\Models;

use App\Gender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'phone', 'image'];

    protected $casts = [
        'gender' => Gender::class,
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    protected static function booted()
    {
        static::deleting(function ($owner) {
            $disk = 'public';

            if ($owner->image && Storage::disk($disk)->exists($owner->image)) {
                Storage::disk($disk)->delete($owner->image);
            }
        });
    }
}
