<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalIdentity extends Model
{
    use HasFactory;

    protected $primaryKey = 'personal_identity_id';

    protected $fillable = [
        'users_id',
        'agama',
        'alamat',
        'berlaku_hingga',
        'golongan_darah',
        'jenis_kelamin',
        'kecamatan',
        'kelurahan_desa',
        'kewarganegaraan',
        'kota_kabupaten',
        'nama_ktp',
        'nik',
        'pekerjaan',
        'provinsi',
        'rt_rw',
        'status_perkawinan',
        'tanggal_lahir',
        'tempat_lahir',
        'ktp_image_file',
        'verified_at',
    ];

    protected $casts = [
        'ktp_image_file' => 'array',
        'verified_at' => 'datetime',
        'tanggal_lahir' => 'date',
    ];

    public function user() : belongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

}
