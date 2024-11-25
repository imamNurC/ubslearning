<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function content()
    {
        return $this->belongsTo(Content::class, 'id_content', 'id_content');
    }

    protected $fillable = [
        'id_customer', 'name', 'number_phone', 'email',
        'id_content', 'content_name', 'price'
    ];
    
}
