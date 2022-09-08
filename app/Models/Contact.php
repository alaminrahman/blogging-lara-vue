<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'address', 'phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contactinformation()
    {
        return $this->hasOne(ContactInformation::class);
    }
}
