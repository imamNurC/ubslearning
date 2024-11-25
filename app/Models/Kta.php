<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Kta extends Authenticatable
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'kta';

    // Specify the primary key
    protected $primaryKey = 'id_kta';

    // If your primary key is auto-incrementing
    public $incrementing = true;

    // Specify the data types of the primary key
    protected $keyType = 'int';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'nama_kta',
        'foto_kta',
        'nickname_kta',
        'nohp_kta',
        'email',
        'jabatan_kta',
        'status_kta',
        'bergabung_kta',
        'kadaluarsa_kta',
        'sunting_kta',
        'password'
    ];
    // public function kelas()
    // {
    //     return $this->belongsTo(Kelas::class, 'kelas_id');
    // }
    public function content()
    {
        return $this->hasMany(Content::class, 'kta_id');
    }


    // Optionally, you can add timestamps if your table includes created_at and updated_at columns
    public $timestamps = false; // Set to false if you don't have these columns
}
