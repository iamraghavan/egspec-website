@component('mail::message')
# New Website Update Enquiry Submitted

A new website update enquiry has been submitted. Here are the details:

@component('mail::table')
| **Field**            | **Details**                 |
|----------------------|-----------------------------|
| **Staff ID:**        | {{ $enquiry->staff_id }}    |
| **Staff Name:**      | {{ $enquiry->staff_name }}  |
| **Staff Email:**     | {{ $enquiry->staff_email }} |
| **Staff Phone:**     | {{ $enquiry->staff_phone }} |
| **Department:**      | {{ $enquiry->department }}  |
| **Work Type:**       | {{ $enquiry->work_type }}   |
| **Data Update:**     | {{ $enquiry->data_update }} |
| **Ticket ID:**       | {{ $enquiry->ticket_id }}   |
| **Ticket Status:**   | {{ $ticketStatus }}         |
@endcomponent

@if($enquiry->google_drive_urls)
### Google Drive URLs:
@foreach(json_decode($enquiry->google_drive_urls) as $url)
- [{{ $url }}]({{ $url }})
@endforeach
@endif

@component('mail::button', ['url' => url('/institution/internal/contact/website/admin/confirmation?ticket-id=' . $enquiry->ticket_id)])
View Ticket
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
