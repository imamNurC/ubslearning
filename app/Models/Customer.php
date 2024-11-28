<?php

namespace App\Models;

use App\Models\Access;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{

    use HasFactory;
    use Notifiable;


    protected $fillable = [
        'name',
        'username',
        'phone_number',
        'email',
        'password',
        'nama_provinsi',
        'nama_kab_kota',
        'nama_kecamatan',
        'nama_kelurahan',
        'longitude',
        'latitude',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'id_customer';

    public function getRoleAttribute()
    {
        return $this->attributes['type'];
    }

    public function accesses()
    {
        return $this->hasMany(Access::class, 'id_customer', 'id_customer');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_customer', 'id_customer');
    }
}
