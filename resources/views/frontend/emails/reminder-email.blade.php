
<b>Dear Customer,</b><br>

<p>Your booking has been confirmed from <b>{{ $booking->slot->start_time }}</b> to <b>{{ $booking->slot->end_time }}</b> at <b>{{ $booking->date }}</b></p>
<br>

Thanks<br>
{{ config('app.name') }}