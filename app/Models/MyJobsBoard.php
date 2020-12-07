<?php

namespace App;

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyJobsBoard extends Model
{
    use HasFactory;
    protected $table = 'MyJobsBoard';
    protected $primarayKey = 'id';
    public $incrementing = true;    
    public $timestamps = true;
    
}
