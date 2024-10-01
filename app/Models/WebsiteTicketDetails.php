<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteTicketDetails extends Model
{
    use HasFactory;

    protected $table = 'website_ticket_details';

    protected $primaryKey = 'ticket_id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'ticket_id',
        'ticket_status',
        'ticket_work_description',
        'appeal_data',
    ];

    protected $casts = [
        'ticket_id' => 'string',
    ];

    // Define relationship with WebsiteUpdateEnquiry
    public function enquiry()
    {
        return $this->belongsTo(WebsiteUpdateEnquiry::class, 'ticket_id', 'ticket_id');
    }

    // Relationship with TicketConversations
    public function conversations()
    {
        return $this->hasMany(TicketConversations::class, 'ticket_id', 'ticket_id');
    }
}
