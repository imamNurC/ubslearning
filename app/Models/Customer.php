<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function accesses()
    {
        return $this->hasMany(Access::class, 'id_customer', 'id_customer');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_customer', 'id_customer');
    }
}
