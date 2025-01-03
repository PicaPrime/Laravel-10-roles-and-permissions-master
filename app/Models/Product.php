<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sets',
        'repitition',
        'description',
        'youtube_link',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
    
}
