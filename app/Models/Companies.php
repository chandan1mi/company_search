<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'bussiness_name',
        'company_email',
        'description',
        'lei',
        'lei_status',
        'managing_lou',
        'registration_number',
        'address',
        'country',
        'number_of_employies'
    ];
}
