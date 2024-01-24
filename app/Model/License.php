<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class License extends Model {
    protected $table = "license";
    protected $primaryKey = "license_id";
    
    protected $fillable = [
        'id','title','categori','isi', 'created_at','updated_at'
    ];
}