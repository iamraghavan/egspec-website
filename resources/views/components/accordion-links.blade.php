<div class="program-accordion">
    <div class="accordion" id="rts-accordion">
        <div class="accordion-item">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Other Links
            </button>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#rts-accordion">
                <div class="accordion-body-content">
                    <table class="table table-striped table-hover table-bordered">

                        <tbody>
                            @foreach ($links as $title => $url)
                                @if ($loop->first || $loop->index % 2 == 0)
                                    <tr>
                                @endif
                                    <td><a style="text-decoration: none; font-weight: 400;" href="{{ $url }}" target="_blank" rel="noopener noreferrer">{{ $title }}</a></td>
                                @if ($loop->iteration % 2 == 0 || $loop->last)
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
