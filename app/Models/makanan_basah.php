<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan_basah extends Model
{
    use HasFactory;
    protected $table="menu_makananbasah";
    protected	$primaryKey	=	'id_makananbasah';
    protected	$fillable	=['nama makanan','harga makanan','deskripsi makanan','jumlah'];
}
