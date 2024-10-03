<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seminar extends Model
{
    use HasFactory;
    protected $table = 'seminar';

    // Define fillable attributes
    protected $fillable = [
        'full_name',
        'country_of_residence',
        'institution',
        'profession',
        'phone_number',
        'email',
        'student_number',
        'screenshot_proof',
        'nationality',
        'user_id',
    ];

    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}