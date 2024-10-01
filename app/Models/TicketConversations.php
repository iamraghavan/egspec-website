<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketConversations extends Model
{
    use HasFactory;

    protected $table = 'ticket_conversations';

    protected $fillable = [
        'ticket_id',
        'sender_type',
        'message',
        'cc_recipients',
        'last_updated',
    ];

    public function ticket()
    {
        return $this->belongsTo(WebsiteTicketDetails::class, 'ticket_id', 'ticket_id');
    }
}
