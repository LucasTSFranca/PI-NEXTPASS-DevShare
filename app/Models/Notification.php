<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';

    protected $fillable = [
        'user_id_initiator',
        'user_id_target',
        'publication_id',
        'type',
        'message',
        'is_read',
    ];


    protected $casts = [
        'is_read' => 'boolean',
    ];

    public function initiator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_initiator');
    }


    public function target(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_target');
    }


    public function publication(): BelongsTo
    {
        return $this->belongsTo(Publication::class);
    }
}
