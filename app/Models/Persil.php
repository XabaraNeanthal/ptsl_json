<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persil extends Model
{
    use HasFactory;
    protected $table = 'pemohon';
    protected $fillable = [
    	'pemohon_id',
    	'penlok_id',
        'ajudikasi_id',
    	'nub',
    	'luas_pengukuran',
    	'penggunaan_tanah',
    	'tanda_batas',
    	'no_pbt',
    	'no_gu',
    	'no_berkas_fisik',
    	'nib',
    ];

    public function penlok()
    {
    	return $this->belongsTo(Penlok::class);
    }

    public function alas_hak()
    {
        return $this->hasMany(AlasHak::class);
    }

    
}