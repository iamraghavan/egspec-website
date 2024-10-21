<div class="wrapper">
    <div class="marquee">
        @foreach($messages as $message)
        <div>
            <span><a href="{{$message['link']}}"> {{ $message['message'] }} </a></span>
            <span class="separator">|</span>
        </div>
        @endforeach
    </div>
</div>

<style>
    .wrapper {
        max-width: 100%;
        background-color: #fbf4c9;
        overflow: hidden;
    }

    .marquee {
        white-space: nowrap;
        overflow: hidden;
        display: inline-block;
        animation: marquee 15s linear infinite;
    }

    .marquee div {
        margin: 1rem;
        display: inline-block;
    }

    .marquee > div > span > a {
        color: black;
        font-size: 2rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .separator {
        margin-left: 1rem;
        margin-right: 1rem;
        color: #333;
        font-weight: bold;
    }

    @keyframes marquee {
        0% {
            transform: translate(100%, 0);
        }

        100% {
            transform: translate(-100%, 0);
        }
    }
</style>
