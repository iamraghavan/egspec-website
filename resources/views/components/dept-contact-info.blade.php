<div class="program-info">
    <h5>Department Contact</h5>
    <p class="text-white">{{ $name }}</p>
    <div class="contact-info">
        <h5><i class="fa fa-phone" aria-hidden="true"></i> Phone:</h5>
        @foreach ($phones as $phone)
            <a href="tel:{{ $phone }}" target="_blank">{{ $phone }}</a>
        @endforeach
    </div>
    <div class="contact-info">
        <h5><i class="fa fa-envelope" aria-hidden="true"></i> Mail:</h5>
        @foreach ($emails as $email)
            <a href="mailto:{{ $email }}" target="_blank">{{ $email }}</a>
        @endforeach
    </div>
</div>
