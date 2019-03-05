<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotel'; 
    protected $primaryKey ='id';
    protected $fillable = ['id', 'nama', 'alamat', 'latitude', 'longitude','price_start','description','star'];
    public $timestamps = false;
}
