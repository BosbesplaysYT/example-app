<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $guarded = [];

    /**
     * Relatie: Een project heeft meerdere taken
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
