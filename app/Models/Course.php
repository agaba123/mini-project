<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'cname',
        'acc_year',
        'department'
    ];

    public function courses(){
        return $this->belongsTo(Department::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
