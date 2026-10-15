<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{   

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'photo_path',
        'project_url',
    ];
    //relacionamento tipo: 1 usuario N projetos
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
