@extends('layout.app')
@section('title', 'DETAIL DAFTAR FILM | FILM BERKAULITAS DISINI TEMPATNYA')
@section('konten')


<main id="main">
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section class="section-bg">
        <div class="container">


            <div class="row justify-content-center mt-5">
                <div class="col-md-12 col-md-offset-0">

                    <div class="row">


                        <div class="container my-5">
                            <div class="row d-flex justify-content-center">
                                <!-- Row untuk konten -->

                                <div class="col-6 col-lg-6">
                                    <div class="card mb-4">
                                        <img alt="{{ $film->original_title }}" src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $film->poster_path }}" class="card-img-top" alt="{{ $film->original_title }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $film->original_title }}</h5>
                                            <div>
                                                <i><span class="glyphicon glyphicon-time"></span> Posted on {{ $film->release_date }}</i>
                                                <i class="float-end">rate {{ $film->vote_average }}</i>
                                            </div>
                                            <div class="card-text">
                                                <br />
                                                <p>{{ $film->overview }}</p>

                                            </div>

                                        </div>

                                    </div>



                                </div>


                                <!-- Sidebar -->
                                <div class="col-4 col-lg-4">


                                    <div class="card mb-4">
                                        <div class="card-body">


                                            <h5>FILM POPULER</h4>


                                                @forelse ($films as $film)
                                                <!-- Media object -->
                                                <div class="d-flex">
                                                    <!-- Image -->
                                                    <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $film->poster_path }}" alt="John Doe" class="me-3 rounded-circle" style="width: 60px; height: 60px;" />
                                                    <!-- Body -->
                                                    <div>
                                                        <small class="text-muted">{{ $film->release_date }}</small>
                                                        <p>
                                                            <a href="/film/{{ $film->original_id }}">{{ $film->title }}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Media object -->
                                                @empty
                                                <div class="alert alert-danger">
                                                    Data Post belum Tersedia.
                                                </div>
                                                @endforelse


                                        </div>
                                    </div>



                                </div>



                            </div>
                        </div>




                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
</main>

<div class="modal" tabindex="-1" id="modalDaftarAkun">
    <div class="modal-dialog">
        <form action="#" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Daftar Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" placeholder="nama@email.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="konfirmPassword" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </form>
    </div>
</div>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    var daftarAkun = document.getElementById('daftarAkun');
    var modalDaftarAkun = new bootstrap.Modal(document.getElementById('modalDaftarAkun'), {
        keyboard: false
    })
    daftarAkun.addEventListener('click', function() {
        modalDaftarAkun.toggle();
    })
</script>


<!-- End #main -->
@endsection
