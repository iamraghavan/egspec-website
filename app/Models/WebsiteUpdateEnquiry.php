<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class WebsiteUpdateEnquiry extends Model
{
    use HasFactory;
    use Notifiable;

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

    public function routeNotificationForTelegram()
    {
        return 993344556;
    }

    public function routeNotificationForGoogleChat()
    {
        return env('GOOGLECHAT_WEBHOOK_URL');
    }
}