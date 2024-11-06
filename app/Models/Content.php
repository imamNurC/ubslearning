<?php

namespace App\Models;

use App\Models\Access;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    use HasFactory; // Use the HasFactory trait if you're using factories for testing

    protected $table = 'content'; // Explicitly define the table name

    protected $fillable = [
        'content_name',
        'price',
        'youtube_url',
        'kategori',
        'deskripsi',
    ];

    // Define the relationship with the Access model
    public function accesses()
    {
        return $this->hasMany(Access::class, 'id_content', 'id_content');
    }

    // Define the relationship with the Transaction model
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_content', 'id_content');
    }
}
