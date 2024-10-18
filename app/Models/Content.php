<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function accesses()
    {
        return $this->hasMany(Access::class, 'id_content', 'id_content');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_content', 'id_content');
    }
}
