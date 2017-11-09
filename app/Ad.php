<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
