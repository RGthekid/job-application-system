<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplikanti extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'contact', 'address', 'description', 'application_position', 'kualifikimi_id'];
    protected $table = "aplikanti";

    public function kualifikimet()
    {
        return $this->hasMany(Kualifikimi::class, 'aplikanti_id');
    }
}
