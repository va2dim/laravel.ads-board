<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    public function author_name()
    {
        return $this->BelongsTo(User::class);
    }
}
