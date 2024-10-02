@extends('layouts.app')
@section('content')

<div class="rts-page-content rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="rts-ap-section">
                    {{-- <h3 class="rts-section-title mb-3">Ticket Details</h3> --}}
                    @if ($ticket_details)
    @switch($ticket_details->ticket_status)
        @case('New')
            <div class="alert alert-success" role="alert">
                This ticket is new. Please expect a response shortly.
            </div>
            @break

        @case('open')
            <div class="alert alert-primary" role="alert">
                This ticket is open. We are currently addressing your issue.
            </div>
            @break

        @case('closed')
            <div class="alert alert-danger" role="alert">
                This ticket is closed. You may reply to this ticket to contact the web admin.
            </div>
            @break

        @default
            <div class="alert alert-secondary" role="alert">
                Ticket status is unknown. Please contact support for more information.
            </div>
    @endswitch
@endif

                    <div class="rts-application-form">

                        @foreach($conversations as $conversation)
                        @if($conversation->sender_type === 'ticket_creator')
                        <!-- Ticket Creator Message -->
                        <div class="media mb-3">
                            <div class="media-body" style="background-color: #cbf2ffc2; padding: 15px; border-radius: 14px;">
                                <div class="d-flex justify-content-between">
                                    <strong style="color: #007bff;">{{ $first_ticket->staff_name }} - {{ $first_ticket->staff_id }}</strong>
                                    <span style="font-size: 12px; color: #555;">{{ $conversation->created_at->format('h:i A') }}</span>
                                </div>
                                <hr class="mt-2">
                                <div class="raw-html">
                                    {!! $conversation->message !!}
                                </div>
                            </div>
                        </div>
                        @else
                        <!-- Web Master Message -->
                        <div class="media mb-3">
                            <div class="media-body" style="background-color: #f1ffbc52; padding: 15px; border-radius: 14px;">
                                <div class="d-flex justify-content-between">
                                    <strong style="color: #28a745;">Web Master</strong>
                                    <span style="font-size: 12px; color: #555;">{{ $conversation->created_at->format('h:i A') }}</span>
                                </div>
                                <hr class="mt-2">
                                <p style="margin: 0;">{!! $conversation->message !!}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach






                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                @if ($ticket_details->ticket_status === 'New' || $ticket_details->ticket_status === 'open')
                <h5 class="mb-0" style="align-content: center; text-align: center; align-items: center;">Replying to Tickets</h5>
                @else
                <h5 class="mb-0" style="align-content: center; text-align: center; align-items: center;">Tickets Information</h5>
                @endif
                <!-- Insert the form here -->

                <div class="program-sidebar">
                    @if ($ticket_details->ticket_status === 'New' || $ticket_details->ticket_status === 'open')
    <div class="single-form-part">
        <div class="single-input">
            <div class="single-input-item">
                <form method="POST" id="contactForm" action="{{ route('website-send-message') }}">
                    @csrf
                    <input type="hidden" name="ticket_id" value="{{ $ticket_id }}">
                    <input type="hidden" name="sender_type" value="ticket_creator">
                    <input type="hidden" name="last_updated" value="{{ now()->format('H:i:s') }}" required>

                    <div class="form-group">
                        <textarea id="data_update" name="message" required></textarea> <!-- Updated name to 'message' -->
                    </div>

                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@else
    <div class="alert alert-primary" role="alert">
        The Ticket was Closed <a href="#" class="alert-link">{{ $ticket_id }}</a>. Thank you.
    </div>
@endif

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>Requestor</strong><br>{{$first_ticket->staff_name}}</td>
                            </tr>
                            <tr>
                                <td><strong>Department</strong><br>{{$first_ticket->department}}</td>
                            </tr>
                            <tr>
                                <td><strong>Submitted</strong><br>{{$first_ticket->created_at}}</td>
                            </tr>
                            <tr>
                                <td><strong>Last Updated</strong><br>{{ \Carbon\Carbon::parse($conversation->last_updated)->format('h:i A') }}</td>

                            </tr>
                            <tr>
                                <td><strong>Status/Priority</strong><br>{{$ticket_details->ticket_status}}</td>
                            </tr>

                    <tr>
                        <td><strong>Attachments</strong></td>


                    </tr>

                            @php
                            $attachments = json_decode($first_ticket->google_drive_urls); // Decode the JSON string
                        @endphp
                        @if (!empty($attachments) && is_array($attachments))
                            @foreach ($attachments as $index => $url)
                            <tr>
                                <td>
                            <a href="{{ $url }}" target="_blank">Attachment {{ $index + 1 }}</a>
                        </td>
                    </tr>
                            @endforeach
                        @else
                            No attachments available.
                        @endif

                        </tbody>
                    </table>

                    <div class="program-info" style="background: var(--rt-secondary) !important;">


                        <!-- End of form insertion -->

                        <p class="text-white">Ticket ID {{ $ticket_id }}</p>

                        <div>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="atom">
                                        <td><strong>Ticket Status</strong></td>
                                        <td><strong>Work Description</strong></td>
                                        <td><strong>Appeal Data</strong></td>
                                    </tr>
                                    <tr>
                                        <td>{{ !empty($ticket_details->ticket_status) ? $ticket_details->ticket_status : 'Loading ...' }}</td>
                                        <td>{{ !empty($ticket_details->ticket_work_description) ? $ticket_details->ticket_work_description : 'No Description' }}</td>
                                        <td>{{ !empty($ticket_details->appeal_data) ? $ticket_details->appeal_data : 'Loading ...' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="contact-info">
                            <h5>Share your Ticket ID</h5>
                            <a style="color: #fff !important;" href="https://wa.me/919786465881?text=Ticket%20ID:%20{{ urlencode($ticket_id) }}" target="_blank">
                                <p>Dr. S. Praveen Kumar (WhatsApp)</p>
                            </a>
                            <a style="color: #fff !important;" href="https://wa.me/919942502245?text=Ticket%20ID:%20{{ urlencode($ticket_id) }}" target="_blank">
                                <p>Mr. J. S. Raghavan (WhatsApp)</p>
                            </a>
                        </div>



                    </div>
                </div>





            </div>
        </div>
    </div>
</div>

<style>

.single-input-item > form {
    margin: 0 !important;
    border: 0px solid #ccc !important;
     border-radius: 0px !important;
}

.contact-info > a > p {
    color: #fff !important;
}
    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th,
table td {
    padding: 12px;
    border: 1px solid #dee2e6;
    text-align: center;
}

table > tbody > .atom > td {
    color: #fff !important;
}

table th {
    background-color: #007bff;
    color: white;
    font-weight: bold;
}

table td {
    background-color: #f8f9fa;
}

table tr:nth-child(even) td {
    background-color: #e9ecef;
}


#contactForm input,
    #contactForm select,
    #contactForm button {
        width: 100%; /* Set width to 100% to ensure full width */
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc; /* You can add basic borders */
    }

    #contactForm button {
        background-color: #007bff; /* Button background color */
        color: white; /* Button text color */
        cursor: pointer; /* Add a pointer cursor for buttons */
    }


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editor = SUNEDITOR.create('data_update', {
            showPathLabel: false,
            charCounter: true,
            maxCharCount: 720,
            width: 'auto',
            maxWidth: '700px',
            height: 400,
            minHeight: '100px',
            maxHeight: '250px',
            buttonList: [
                ['bold', 'underline', 'italic', 'strike', 'subscript', 'superscript', 'removeFormat', 'fontColor', 'hiliteColor', 'outdent', 'indent', 'align', 'horizontalRule', 'list', 'table'],
                ['link', 'fullScreen', 'preview', 'print', 'save']
            ],
            callBackSave: function(contents, isChanged) {
                console.log(contents);
            }
        });

        // Listen to input events on the editor
        editor.onChange = function(contents, core) {
            // Update the underlying textarea
            editor.save();
            console.log(document.getElementById("data_update").value);
        };

        // Attach form submission handler
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            // Make sure to save the content before submission
            editor.save();
            // Optionally, you could prevent default here if you want to validate before submission
        });
    });
    </script>


@endsection
