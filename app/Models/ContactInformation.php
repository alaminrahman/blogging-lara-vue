<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;


    protected $guards = [];

    protected $fillable = ['pincode', 'near_by', 'tel_no', 'extra_detail', 'contact_id'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
