<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yönetim Paneli</title>
    <link rel="stylesheet" href="{{ asset('css/panel.min.css') }}">
</head>

<body>
    <header>
        <nav style="justify-content: center;">
            <div class="logo">Yönetim Paneli</div>
        </nav>
    </header>
    <div class="header">
        @if (session('error'))
            {{ session('error') }}
        @endif
        <form action="{{ route('page.login.post') }}" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="input">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <label for="email">E-posta</label>
                <input type="email" id="email" name="email" placeholder="E-posta" required />
            </div>
            <div class="input">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" placeholder="Şifre" required />
            </div>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
    {{-- <script src="{{ asset('js/panel.min.js') }}"></script> --}}
</body>

</html>
