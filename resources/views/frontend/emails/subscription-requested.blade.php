{{--@component('mail::message')--}}
    <b>Dear Customer,</b><br>

    Thanks for your subscription request. Your request is in progress. Here are the package details:<br>
Package Name: {{ $package->name }} <br>
Price: {{ $package->price }}$<br>
Features: @foreach(json_decode($package->features) as $feature)
              <li>{{ $feature }}</li>
              @endforeach
<br>
{{--    @component('mail::button', ['url' => $url])--}}
{{--        View Order--}}
{{--    @endcomponent--}}

    Thanks<br>
    {{ config('app.name') }}
{{--@endcomponent--}}
