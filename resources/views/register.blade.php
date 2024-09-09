@extends('induk')

@section('isi-kandungan')
<div class="card">
    <div class="card-body">

        <form method="POST" class="form mt-5" action="/register-data">

            <h3 class="text-center text-dark">Daftar Akaun</h3>

            <div class="form-group mt-3"">
                <input type="text" name="name" class="form-control" placeholder="Nama Penuh">
            </div>

            <div class="form-group mt-3"">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>

            <div class="form-group mt-3"">
                <input type="email" name="email" class="form-control" placeholder="Alamat Email">
            </div>

            <div class="form-group mt-3">
                <input type="text" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group mt-3">
                <input type="text" name="password_confirmation" class="form-control" placeholder="Ulang Taip Password">
            </div>

            <div class="form-group mt-3"">
                <button type="submit" class="btn btn-dark btn-md">Daftar Akaun</button>
            </div>

            <div class="text-center mt-2">
                Sudah ada akaun? <a href="/login" class="text-dark">Login ke akaun</a>
            </div>

        </form>

    </div>
</div>
@endsection


