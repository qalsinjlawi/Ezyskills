<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $primaryKey = 'message_id';
    
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];

    // علاقة الرسالة بالمستخدم
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}