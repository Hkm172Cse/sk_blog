<?php

namespace App\Models\aboutPage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class know_aboutus_content extends Model
{
    public $table = 'know_aboutus_content';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
