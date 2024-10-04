<div class="wrapper">
    <div class="marquee">
        @foreach($messages as $message)
        <div>

                <span>{{ $message['message'] }}</span>

        </div>
        <div>

            <span>{{ $message['message'] }}</span>

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
        animation: marquee 10s linear infinite;
    }

    .marquee div {
        margin: 1rem;
        display: inline-block;
    }

    @keyframes marquee {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(-60%, 0);
        }
    }
</style>
