<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kualifikimi extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'study_field', 'institution', 'finish_date', 'aplikanti_id'];
    protected $table = "kualifikimi";

    public function aplikanti()
    {
        return $this->belongsTo(Aplikanti::class, 'aplikanti_id');
    }
}
