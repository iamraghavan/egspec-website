<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteUpdateEnquiry extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'website_update_enquiry';

    // The attributes that are mass assignable
    protected $fillable = [
        'staff_id',
        'ticket_id',
        'staff_name',
        'staff_email',
        'staff_phone',
        'department',
        'work_type',
        'data_update',
        'google_drive_urls',
        'confirmation',
    ];

    // Convert JSON attributes to array when accessing
    protected $casts = [
        'google_drive_urls' => 'array',
        'confirmation' => 'boolean',
    ];

    // Define the relationship with WebsiteTicketDetails
    public function ticketDetails()
    {
        return $this->hasOne(WebsiteTicketDetails::class, 'ticket_id', 'ticket_id');
    }
}
