<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barangModel extends Model
{
    protected $table='tb_barang';
    protected $fillable=['nama','deskripsi','harga'];
    protected $primarykey='kode_barang';
}
