@extends('layout.app')
@section('title', 'LOGIN')
@section('konten')

<main id="main">
    <!-- ======= Frequently Asked Questions Section ======= -->


    <section class="section-bg">
        <div class="container">

            <form class="form-horizontal" role="form" method="POST" action="/signin">

                <div class="row justify-content-center mt-5">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="card">
                            <div class="card-body">

                                <p>Masukkan informasi login dengan benar</p>
                                <div class="mb-4">
                                    <label for="member_email" class="form-label">Username/Email</label>
                                    <input type="text" class="form-control" id="member_email" />
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Username tidak boleh dikosongi.</strong>
                                    </span>
                                </div>
                                <div class="mb-4">
                                    <label for="member_password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="member_password" />
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Katasandi tidak boleh dikosongi.</strong>
                                    </span>
                                </div>


                            </div>
                        </div>
                        <br />
                        <input type="submit" name="next-step" class="btn btn-primary float-end" value="Masuk Sekarang" />
                        <input type="button" name="previous-step" class="btn btn-warning float-end" style="margin-right: 4px;" value="Lupa Akun" />



                    </div>
                </div>
            </form>

            <div style="height: 400px;"></div>

        </div>
    </section>



    <!-- End Frequently Asked Questions Section -->
</main>
<!-- End #main -->
@endsection
