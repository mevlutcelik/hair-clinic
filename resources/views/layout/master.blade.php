<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" {!! config('app.locale') === 'ar' ? 'dir="ltr"' : null !!}>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mx-post-adress" content="{{  \LaravelLocalization::localizeURL(route('page.post')) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hair Forever')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @if (config('app.locale') === 'ar')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@400;500;600&display=swap');

            * {
                font-family: 'Noto Sans Arabic', system-ui, sans-serif !important;
                text-align: right;
            }

            .side-nav .side-links a,
            nav .location,
            .side-nav .location {
                justify-content: flex-end !important;
            }

            .plan-card li{
                flex-direction: row-reverse;
            }
            .plan-card svg{
                margin-right: 0;
                margin-left: 1rem;
            }

            .map .user-card{
                justify-content: space-between;
            }

        </style>
    @endif
</head>

<body>
    @yield('content')
    <script>
        const swAlertName = `{{ __('map.name') }}`;
        const swAlertEmail = `{{ __('map.email') }}`;
        const swAlertPhone = `{{ __('map.phone') }}`;
        const swAlertMessage = `{{ __('map.message') }}`;
        const swAlertContinue = `{{ __('map.continue') }}`;
        const swAlertCancel = `{{ __('map.cancel') }}`;
        const swAlertClose = `{{ __('map.close') }}`;
        const swAlertNameInvalid = `{{ __('map.name-invalid') }}`;
        const swAlertEmailInvalid = `{{ __('map.email-invalid') }}`;
        const swAlertPhoneNullInvalid = `{{ __('map.phone-null-invalid') }}`;
        const swAlertPhoneInvalid = `{{ __('map.phone-invalid') }}`;
        const swAlertMessageInvalid = `{{ __('map.message-invalid') }}`;
        const swAlertSubmitText = `{{ __('map.submit') }}`;
        const swAlertErrMessage = `{{ __('map.sw-alert-err-text') }}`;
        const swAlertSuccMessage = `{{ __('map.sw-alert-succ-text') }}`;
        const swAlertSuccTitle = `{{ __('map.sw-alert-succ-title') }}`;
        const mapFormNullMessage = `{{__('map.form-null-message')}}`;
    </script>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
