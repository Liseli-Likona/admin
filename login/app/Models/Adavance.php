<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adavance extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function employee(){
        $this->belongsTo(Employee::class);
    }
}
