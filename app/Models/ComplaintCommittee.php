<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintCommittee extends Model
{
    use HasFactory;

    protected $table = 'complaint_committee';

    protected $fillable = ['name', 'address', 'committee', 'contact_details'];
}
