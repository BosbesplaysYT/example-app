<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $guarded = [];
    public $timestamps = true;

    /**
     * Relatie: Een taak behoort tot één project
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
