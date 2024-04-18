<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stack;


class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function stack(){
        return $this->belongsTo(Stack::class, 'stack_id', 'id');
    } 
}
