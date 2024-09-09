@extends('induk')

@section('isi-kandungan')

    <div class="card">
        <div class="card-body">

            <form>

                <div class="mb-2">
                    <textarea class="form-control" name="post"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Post
                </button>

            </form>

        </div>
    </div>

    @foreach( $senaraiPost AS $post )

    <div class="card mt-2">
        <div class="card-body d-flex">

            <img src="https://via.placeholder.com/50" alt="gambar" class="rounded-circle me-2">

            <div>
                <h6 class="mb-0">
                    @ {{ $post['username'] }}
                </h6>
                <p class="mb-1">
                    {{ $post['content'] }}
                </p>
            </div>

        </div>
    </div>

    @endforeach


@endsection


