@extends('layout.app')
@section('title', 'DAFTAR FILM | FILM BERKAULITAS DISINI TEMPATNYA')
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
                                <div class="col-8 col-lg-8">
                                    <div class="row">

                                        @forelse ($films as $film)
                                        <div class="col-6 col-lg-6">
                                            <div class="card mb-4">
                                                <a href="/film/{{ $film->original_id }}"><img src="https://www.themoviedb.org/t/p/w220_and_h330_face/{{ $film->poster_path }}" class="card-img-top" alt="{{ $film->title }}"></a>
                                                <div class="card-body">
                                                    <a href="/film/{{ $film->original_id }}">
                                                        <h5 class="card-title">{{ $film->title }}</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                        @endforelse


                                        <nav aria-label="Page navigation contoh">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                                <!-- Sidebar -->
                                <div class="col-4 col-lg-4">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5>Langganan melalui Email</h5>
                                            <form action="#">
                                                <div class="input-group my-3">
                                                    <span class="input-group-text" id="email-at">@</span>
                                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-at" required>
                                                </div>
                                                <button class="btn btn-primary btn-block" id="daftarAkun">Daftar</button>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <h5>Ikuti Kami di</h5>
                                            <a href="https://www.facebook.com/jasaedukasi/" class="btn btn-secondary mr-2" data-toggle="tooltip" data-placement="top" title="Ikuti kami di Facebook">
                                                Facebook
                                            </a>
                                            <a href="https://www.youtube.com/channel/jasaedukasi" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Ikuti kami di YouTube">
                                                Youtube
                                            </a>
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
