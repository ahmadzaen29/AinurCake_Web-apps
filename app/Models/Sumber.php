<?php 
namespace App\Models; use Illuminate\Database\Eloquent\Model; 

class Sumber extends Model
{
    protected $table = 'sumber';
    protected $primaryKey = 'id_sumber';
    public $timestamps = false;

    protected $fillable = ['nama']; // Add any other fields that are fillable
}