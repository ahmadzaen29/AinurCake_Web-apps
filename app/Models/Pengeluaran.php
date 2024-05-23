<?php 
namespace App\Models; use Illuminate\Database\Eloquent\Model; 

class Pengeluaran extends Model
{
    protected $table = 'pengeluaran';
    public $timestamps = false;

    protected $fillable = ['id_sumber', 'jumlah']; // Add any other fields that are fillable
}