<div class="rts-notice-section">
    <div class="rts-section rt-between pb--25 rts-border-bottom-2">
        <h4 class="rts-section-title">Notice</h4>
        <a href="{{ url('#') }}" class="rts-arrow" style="color: var(--rt-theme);">View All <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
    </div>
    <div class="rts-tab">
        <ul class="nav nav-pills pb--30" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Latest</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">COE</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Principal & Administration</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <ul class="list-unstyled notice-content-box">
                    @foreach($notices['latest'] as $notice)
                    <li class="single-notice">
                        <div class="single-notice-item">
                            <div class="notice-date">
                                {{ date('d', strtotime($notice['date'])) }}
                                <span>{{ date('M', strtotime($notice['date'])) }}</span>
                            </div>
                            <div class="notice-content">
                                <p>
                                    <a href="{{ url('notice-details.html') }}">
                                        {{ $notice['content'] }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <ul class="list-unstyled notice-content-box">
                    @foreach($notices['coe'] as $notice)
                    <li class="single-notice">
                        <div class="single-notice-item">
                            <div class="notice-date">
                                {{ date('d', strtotime($notice['date'])) }}
                                <span>{{ date('M', strtotime($notice['date'])) }}</span>
                            </div>
                            <div class="notice-content">
                                <p>
                                    <a href="{{ url('notice-details.html') }}">
                                        {{ $notice['content'] }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <ul class="list-unstyled notice-content-box">
                    @foreach($notices['admin'] as $notice)
                    <li class="single-notice">
                        <div class="single-notice-item">
                            <div class="notice-date">
                                {{ date('d', strtotime($notice['date'])) }}
                                <span>{{ date('M', strtotime($notice['date'])) }}</span>
                            </div>
                            <div class="notice-content">
                                <p>
                                    <a href="{{ url('notice-details.html') }}">
                                        {{ $notice['content'] }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
