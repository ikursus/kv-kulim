@extends('induk')


@section('isi-kandungan')
<div class="card">
    <div class="card-body">

        <form method="POST" class="form mt-5" action="/login-data">

            @csrf

            <h3 class="text-center text-dark">Login</h3>

            <div class="mb-2">
                <input type="text" name="email" class="form-control" placeholder="Email Anda">
            </div>

            <div class="mb-2">
                <input type="password" name="password" class="form-control" placeholder="Password Anda">
            </div>

            <button type="submit" class="btn btn-primary">
                Login Sekarang
            </button>

            <div class="mt-3 text-center">
                Belum ada akaun? <a href="register">Daftar sekarang</a>
            </div>

        </form>

    </div>
</div>
@endsection
