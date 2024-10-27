@extends('layouts.app')
@section('content')

@include('components.breadcrumb', [
    'value_1' => 'Home',
    'value_2' => 'Search Query',
    'value_3' => '',
    'page_title' => ''
])

<style>


    h4 {
        color: #333;
        margin-bottom: 20px;
    }

    .search-results {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;

        margin: auto; /* Center the container */
    }

    .result-item {
        border-bottom: 1px solid #e0e0e0;
        padding: 15px 0;
        display: flex;
        align-items: flex-start; /* Align items to the top */
        flex-wrap: wrap; /* Allow wrapping for smaller screens */
    }

    .result-item:last-child {
        border-bottom: none;
    }

    .result-item img {
        width: 100px;
        height: auto;
        border-radius: 4px;
        margin-right: 15px;
    }

    .result-item a {
        text-decoration: none;
        color: #1a0dab;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 5px; /* Space between title and description */
    }

    .result-item a:hover {
        text-decoration: underline;
    }

    .description {
        color: #555;
        margin-top: 5px;
        font-size: 14px; /* Slightly smaller font for description */
    }

    .extra-info {
        color: #777;
        font-size: 12px; /* Smaller font for extra info */
        margin-top: 2px; /* Space between description and extra info */
    }

    .no-results {
        text-align: center;
        margin-top: 20px;
        color: #777;
    }

    @media (max-width: 600px) {
        .result-item {
            flex-direction: column; /* Stack items on small screens */
            align-items: flex-start; /* Align items to the start */
        }

        .result-item img {
            margin-bottom: 10px; /* Space below image */
        }
    }
</style>


<section class="rts-about-university pt--100 pb--80" id="">
    <div class="container">
        <div class="row">
            <div class="rts-section">

                <div class="col-lg-10 col-md-9 col-sm-12">
                    <div class="rts-section-description">
                        <div class="profile-info">
                            <div class="search-results">
                                <h4>Search Results for "{{ $query }}"</h4>

                                @if($courseResults->isEmpty() && $eventResults->isEmpty())
                                    <p class="no-results">No results found for your query.</p>
                                @else
                                    @if(!$courseResults->isEmpty())
                                        <h5>Course Results:</h5>
                                        @foreach($courseResults as $course)
                                            <div class="result-item">
                                                <img src="{{ $course->image_url }}" alt="{{ $course->course_name }}">
                                                <div>
                                                    <a href="{{ $course->course_url }}">{{ $course->course_name }}</a>
                                                    <p class="description">{{ $course->description }}</p>
                                                    <p class="extra-info">Type: {{ $course->course_type }} | ID: {{ $course->course_id }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                    @if(!$eventResults->isEmpty())
                                        <h5>Event Results:</h5>
                                        @foreach($eventResults as $event)
                                            <div class="result-item">
                                                <div>
                                                    <strong>{{ $event->event_name }}</strong>
                                                    <p class="description">Date: {{ $event->date }}</p>
                                                    <p class="extra-info">Venue: {{ $event->venue }} | Organizer: {{ $event->organizer_details }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection

