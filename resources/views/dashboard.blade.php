@extends('induk')

@section('isi-kandungan')

<div class="alert alert-success alert-dismissible fade show" role="alert">
    Cerita berjaya disimpan!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<h4> Kongsi cerita anda </h4>

<div class="row">
    <div class="mb-3">

        <textarea class="form-control" id="content" rows="3" name="content"></textarea>

    </div>
    <!-- Tamat div mb-3 -->
    <div class="">
        <button class="btn btn-dark"> Kongsi </button>
    </div>
    <!-- Tamat div -->
</div>
<!-- Tamat div row -->

<hr>

@foreach ( $senaraiPost AS $post )

<div class="mt-3">

    <div class="card">

        <div class="px-3 pt-4 pb-2">

            <div class="d-flex align-items-center justify-content-between">

                <div class="d-flex align-items-center">

                    <img style="width:50px" class="me-2 avatar-sm rounded-circle" src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">

                    <div>
                        <h5 class="card-title mb-0">
                            <a href="#">
                                {{ $post['username'] }}
                            </a>
                        </h5>
                    </div>

                </div>

            </div>

        </div>
        <!-- Tamat div px-3 pt-4 pb-2 -->

        <div class="card-body">

            <p class="fs-6 fw-light text-muted">
                {{ $post['content'] }}
            </p>

            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6">
                        <span class="fas fa-heart me-1"></span> 100
                    </a>
                </div>
                <div>
                    <span class="fs-6 fw-light text-muted">
                        <span class="fas fa-clock"></span>
                        3-5-2023
                    </span>
                </div>
            </div>
            <!-- Tamat div d-flex -->

            <div>
                <div class="mb-3">
                    <textarea class="fs-6 form-control" rows="1"></textarea>
                </div>

                <div>
                    <button class="btn btn-primary btn-sm"> Beri Komen </button>
                </div>

                <hr>

                <div class="d-flex align-items-start">

                    <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
                        alt="Luigi Avatar">

                    <div class="w-100">
                        <div class="d-flex justify-content-between">

                            <h6 class="">Luigi</h6>

                            <small class="fs-6 fw-light text-muted"> 3 hour ago</small>
                        </div>

                        <p class="fs-6 mt-3 fw-light">
                            Contoh komen
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tamat div card-body -->
    </div>
    <!-- Tamat div card -->

</div>
<!-- Tamat div mt-3 -->
@endforeach

@endsection


