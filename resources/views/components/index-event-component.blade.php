<div class="rts-event-section">
    <div class="rts-section rt-between pb--25 rts-border-bottom-2">
        <h4 class="rts-section-title mb--25">Events</h4>
        <a href="{{ url('#') }}" class="rts-arrow" style="color: var(--rt-theme);">View All <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
    </div>

    <div class="rts-event-section-content">
        <ul class="list-unstyled rts-counter">
            @foreach(array_slice($events, 0, 3) as $event) <!-- Get the latest three events -->
            <a href="{{$event['resource_link']}}" target="_blank" rel="noopener noreferrer">
            <li class="single-event">
                <div class="single-event-counter">
                    <div class="count-number rt-clip-text"></div>
                </div>
                <div class="single-event-content">
                    <h5 class="event-title">{{ $event['title'] }}</h5>
                    <div class="single-event-content-meta">
                        <div class="event-date">
                            <span><i class="fal fa-calendar"></i></span>
                            <span>{{ $event['date'] }}</span>
                        </div>
                        <div class="event-time">
                            <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                            <span>{{ $event['time'] }}</span>
                        </div>
                        <div class="event-place">
                            <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                            <span>{{ $event['place'] }}</span>
                        </div>
                    </div>
                </div>
            </li>
        </a>
            @endforeach
        </ul>
    </div>
</div>
