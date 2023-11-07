<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nama','alamat','tanggal_lahir','jenis_kelamin', 'program_studi'] ;
    protected $table = 'mahasiswas';
    public $timestamps = false;
}
