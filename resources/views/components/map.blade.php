@php
$phone = config('hfc.phone');
$formattedPhone = '+90 (' . substr($phone, 0, 3) . ') ' . substr($phone, 3, 3) . ' ' . substr($phone, 6, 2) . ' ' . substr($phone, 8, 2);
@endphp
<div class="map">
    <iframe frameborder="0"
        src="https://maps.google.com/maps?t=m&output=embed&iwloc=near&z=15&q=H%C3%BCseyina%C4%9Fa%2C+Sahne+Sk.+34435+Beyo%C4%9Flu%2F%C4%B0stanbul&hl={{ config('app.locale') }}"
        width="100%" height="900"></iframe>
    <div class="user-card">
        <img src="{{ asset('images/marwah-e1650023155749.webp') }}" alt="Marwah Kahil">
        <div>
            <div class="location">{{ __('map.location') }}</div>
            <div class="work-hours"><strong>{{ __('map.mon-fri') }}:</strong> {{ __('map.9-6') }}</div>
            <div class="work-hours"><strong>{{ __('map.sat-sun') }}:</strong> {{ __('map.10-6') }}</div>
            <div>{{ __('map.card-message') }}</div>
            <div>{{ __('map.my-number') }} <strong style="font-family: 'Poppins', system-ui, sans-serif;">{{ $formattedPhone }}</strong></div>
        </div>
    </div>
    <div class="form">
        <div class="form-title">{{ __('map.appointment') }}</div>
        <div class="form-desc">{{ __('map.appointment-desc') }}</div>
        <form action="{{  \LaravelLocalization::localizeURL(route('page.post')) }}" autocomplete="off" autocapitalize="on">
            <div style="margin: 1rem 0;font-weight:600;" id="form-alert-message"></div>
            <div class="first-line">
                <input type="text" id="name" autocapitalize="words" placeholder="{{ __('map.name') }}">
                <input type="email" id="email" inputmode="email" placeholder="{{ __('map.email') }}">
                <input type="tel" id="phone" pattern="[0-9]*" inputmode="tel" placeholder="{{ __('map.phone') }}">
            </div>
            <textarea id="message" placeholder="{{ __('map.message') }}"></textarea>
            <button type="submit">{{ __('map.submit') }}</button>
        </form>
    </div>
</div>
