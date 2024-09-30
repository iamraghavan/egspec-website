@extends('layouts.app')

@section('content')
<div class="container my-5 py-5">
    <div class="card shadow-sm border-0">
        <div class="card-body text-center">
            <h3 class="card-title mb-4">Ticket Confirmation</h3>
            <div class="ticket-info">
                <p class="ticket-id"><span class="ticket-label">Ticket ID:</span> {{ $ticket_id }}</p>
                <p class="ticket-status mt-3">Ticket Status: <span class="status">{{ $ticket_status }}</span></p>
            </div>
        </div>
    </div>

    <div class="card shadow-sm border-0 mt-4">
        <div class="card-body">
            <h5 class="card-title mb-4 text-center">Ticket Details</h5>
            <table class="table table-bordered">
                <tbody>
                    <tr>
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
    </div>

    <div class="card shadow-sm border-0 mt-4">
        <div class="card-body text-center">
            <h5 class="card-title mb-4">Share Ticket ID</h5>
            <a href="https://wa.me/919786465881?text=Ticket%20ID:%20{{ urlencode($ticket_id) }}" target="_blank">
                <p>Dr. S. Praveen Kumar (WhatsApp)</p>
            </a>
            <a href="https://wa.me/919942502245?text=Ticket%20ID:%20{{ urlencode($ticket_id) }}" target="_blank">
                <p>Mr. J. S. Raghavan (WhatsApp)</p>
            </a>
        </div>
    </div>
</div>

<style>

    .card-title {
        font-size: 24px;
        font-weight: 700;
        color: #343a40;
    }
    .ticket-info {
        font-size: 18px;
        color: #495057;
    }
    .ticket-label {
        font-weight: 600;
        color: #6c757d;
    }
    .ticket-id {
        font-size: 20px;
        font-weight: 700;
        color: #007bff;
    }
    .ticket-status {
        font-size: 18px;
    }
    .status {
        font-weight: 600;
        color: #28a745;
    }
    .card-body a {
        color: #007bff;
        text-decoration: none;
    }
    .card-body a:hover {
        text-decoration: underline;
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

table tr:hover td {
    background-color: #f1f1f1;
}

</style>

@endsection
