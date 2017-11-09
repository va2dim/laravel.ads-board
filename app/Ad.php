<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    const UPDATED_AT = null; // not work for LARAVEL 5.5.0 - 5.5.5


    protected $fillable = [
      'title', 'description', 'user_id',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
