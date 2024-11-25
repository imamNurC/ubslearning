<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    // Specify the table name if it's not pluralized correctly (optional)
    protected $table = 'kelas';


    // Define the relationship with the Content model
    // public function content()
    // {
    //     return $this->belongsTo(Content::class, 'content_id');
    // }

    public function content()
    {
        return $this->hasMany(Content::class, 'kelas_id');
    }

    // // Define the inverse of the relationship with KTA (Kta has many Kelas)
    // public function kta()
    // {
    //     return $this->hasMany(Kta::class, 'kelas_id');
    // }
}
