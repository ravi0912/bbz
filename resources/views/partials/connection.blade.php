@if($showprofile == 1)
    @if($connect == 0)
        <div onmouseup="SentRequestMouseUp(event,{{ $usr }})">
            <img src = "{{ URL::asset('images/addconnection.svg') }}" alt="0" title="Send Request Connection">
        </div>
    @elseif($connect == 2)
        <div onmouseup="CancelRequestMouseUp(event,{{ $usr }})">
            <img src = "{{ URL::asset('images/requestsent.svg') }}" alt="2" title="Request Sent, Click for cancel Request">
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

