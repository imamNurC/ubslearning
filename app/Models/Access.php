<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function content()
    {
        return $this->belongsTo(Content::class, 'id_content', 'id_content');
    }
}
