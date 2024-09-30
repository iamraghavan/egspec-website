<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class WebsiteTicketDetails extends Model
{
    use HasFactory;
    use Notifiable;

    // Specify the table associated with the model
    protected $table = 'website_ticket_details';

    // The attributes that are mass assignable
    protected $fillable = [
        'ticket_id',
        'ticket_status',
        'ticket_work_description',
        'appeal_data',
    ];

    protected $casts = [
        'ticket_id' => 'string',
    ];

    // Define the relationship with WebsiteUpdateEnquiry
    public function enquiry()
    {
        return $this->belongsTo(WebsiteUpdateEnquiry::class, 'ticket_id', 'ticket_id');
    }

    public function routeNotificationForGoogleChat()
{
    return env('GOOGLECHAT_WEBHOOK_URL');
}

}