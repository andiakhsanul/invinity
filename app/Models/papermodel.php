<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class papermodel extends Model
{
    use HasFactory;

    protected $table = 'paper';
    protected $fillable = [
        'full_name',
        'institution',
        'profession',
        'phone_number',
        'student_number',
        'screenshot_proof',
        'payment_proof',
        'document',
        'user_id',
        'payment_methods',
        'country_of_residence',
        'email',
        'nationality',
        'poster',
        'status',
        'reason'
    ];

}
