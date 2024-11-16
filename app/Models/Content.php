<?php

namespace App\Models;

use App\Models\Access;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    use HasFactory;

    protected $table = 'content';
    protected $primaryKey = 'id_content';
    protected $fillable = [
        'content_name',
        'price',
        'youtube_url',
        'kategori',
        'deskripsi',
        'deskripsi_panjang',
        'image_path',
        'count_view',
        'count_buy',
    ];


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