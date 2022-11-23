<?php

namespace App\Models\portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upcomingPortfolio extends Model
{
    public $table = 'upcoming_portfolio';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
    use HasFactory;
}
