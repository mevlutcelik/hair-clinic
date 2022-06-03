<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yönetim Paneli</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        svg{
            width: 1.5rem;
            height: 1.5rem;
        }
    </style>
</head>

<body>
<nav class="navbar bg-light shadow">
    <div class="container">
        <a class="navbar-brand">Yönetim Paneli</a>
        @auth<a href="{{route('page.dash.signout')}}" class="btn btn-danger">Çıkış Yap</a>@endauth
    </div>
</nav>
    @auth
        @if(count($posts) === 0)
            Henüz hiç mesaj gönderilmemiş
        @else
            <div class="table-responsive px-3">
            <table class="table table-striped container my-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
        @foreach($posts as $key => $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->name}}</td>
                        <td>{{$post->email}}</td>
                        <td>{{$post->phone}}</td>
                        <td>{{$post->message}}</td>
                    </tr>
        @endforeach
                </tbody>
            </table>
            </div>
            <div class="d-flex justify-content-center">
                {!! $posts->links() !!}
            </div>
        @endif
    @endauth
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
