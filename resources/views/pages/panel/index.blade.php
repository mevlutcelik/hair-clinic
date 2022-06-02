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
        <form action="{{ route('page.panel.login') }}" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="input">
                <label for="username">Kullanıcı adı</label>
                <input type="text" id="username" name="username" placeholder="Kullanıcı adı" required />
            </div>
            <div class="input">
                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" placeholder="Şifre" required />
            </div>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
    {{-- <script src="{{ asset('js/panel.min.js') }}"></script> --}}
</body>

</html>
