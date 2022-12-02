{{--@component('mail::message')--}}
    <b>BOOKING CONFIRMED,</b><br>

<!--Your booking has been confirmed from <b>{{ $booking->slot->start_time }} to {{ $booking->slot->end_time }}</b> at <b>{{ $booking->date }}</b>-->
<!--<p>Please note;</p><p> Booking times are an estimate only due to delays on previous jobs.</p><p> Please allow up to 4 hours for the work to be completed.</p>-->
<!--<p class="mt-3">No one needs to be home we only require access around the property. Please DO NOT REPLY to the automated SMS or EMAIL to contact us please use guttercleaningguy@outlook.com or 0447784206-->
<!--</p>-->


<p>Thank you for booking with us we appreciate your business. We really want you to receive fantastic service from us, so we have put together a little list of what to expect from our 
service and how we operate.</p>
<ul>
    <li style="list-style:disc">Booking times are an estimate only sometimes we might be a little late and apologies if that occurs but we will do our best to let you know beforehand by text message but 
     please allow half an hour or so each side of your booking for bus to arnve.</li>
    <li style="list-style:disc">Please allow up to 4 hours for the work to be completed.</li>
    <li style="list-style:disc">Gutter Cleaning Guys love pets and would be really upset if we tripped over your pet and hurt it so please try to keep pets contained if possible.</li>
    <li style="list-style:disc">You don't need too be home while we work we just require clear access around your property.</li>
    <li style="list-style:disc">Payments can be made in cash on the day or we can send you an invoice to pay online.</li>
    <li style="list-style:disc">If you need to contact us please call 0447784206 or email guttogo@outtook.corn</li>
    
</ul>
<p>No one needs to be home we only require access around the property. Please DO NOT REPLY to the automated SMS or EMAIL to contact us please use 
guttercleaningguy@outlook.com or 0447784206</p>
<p>Have A Great Day<p>
<p>Gutter Cleaning Guys<p>
<p>Dont Risk A Fall Give Us A Call<p>
<br>
{{--    @component('mail::button', ['url' => $url])--}}
{{--        View Order--}}
{{--    @endcomponent--}}

    Thanks<br>
    {{ config('app.name') }}
{{--@endcomponent--}}
