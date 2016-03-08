@if($showprofile == 1)
    @if($connect == 0)
        <div onmouseup="SentRequestMouseUp(event,{{ $usr }})">
            <input class = "sp_img" type="image"  src = "{{ URL::asset('images/add.svg') }} " alt="0" title="Send Request Connection">
        </div>
    @elseif($connect == 2)
        <div onmouseup="CancelRequestMouseUp(event,{{ $usr }})">
            <input class = "sp_img" type="image"  src = "{{ URL::asset('images/sent.svg') }}" alt="2" title="Request Sent, Click for cancel Request">
        </div>
    @endif
@endif

@if($connectionNotification == 1)
    @if($connect == 2)
        <div>
           Accepted
        </div>
    @elseif($connect == 3)
        <div>
            Canceled
        </div>
    @endif
@endif

