<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kursus extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'kursuses';
    protected $primaryKey = 'id';

    protected $fillable = [
        'pusat',
        'kursus'
    ];
}
