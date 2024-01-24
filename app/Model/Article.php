<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    protected $table = "article";
    protected $primaryKey = "article_id";
    
    protected $fillable = [
        'id', 'title', 'image','isi', 'created_at','updated_at'
    ];
}