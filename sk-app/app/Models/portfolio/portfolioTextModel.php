<?php

namespace App\Models\portfolio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolioTextModel extends Model
{
    public $table = 'portfolio_text';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
    use HasFactory;
}
