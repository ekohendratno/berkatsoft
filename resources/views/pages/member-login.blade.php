@extends('layout.app')
@section('title', 'LOGIN')
@section('konten')

<main id="main">
    <!-- ======= Frequently Asked Questions Section ======= -->


    <section class="section-bg">
        <div class="container">

            <div class="row justify-content-center mt-5">
                <div class="col-md-6 col-md-offset-2">


                @if(Auth::check())
                    <div class="card">
                        <div class="card-body text-center">
                            <p>Kamu masih login</p>
                        </div>
                    </div>
                    <br />
                @else
                    <div class="card">
                        <div class="card-body">

                            <p>Masukkan informasi login dengan benar</p>
                            <div class="mb-4">
                                <label for="email" class="form-label">Username/Email</label>
                                <input type="text" class="form-control" id="email" value="admin@mail.com" />
                                <span class="invalid-feedback" role="alert">
                                    <strong>Username tidak boleh dikosongi.</strong>
                                </span>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" value="admin" />
                                <span class="invalid-feedback" role="alert">
                                    <strong>Katasandi tidak boleh dikosongi.</strong>
                                </span>
                            </div>


                        </div>
                    </div>
                    <br />
                    <input type="button" name="next-step" class="btn btn-primary float-end" id="signin" value="Masuk Sekarang" />
                    <input type="button" name="previous-step" class="btn btn-warning float-end" style="margin-right: 4px;" value="Lupa Akun" />


                    @endif

                </div>
            </div>

            <div style="height: 400px;"></div>

        </div>
    </section>



    <!-- End Frequently Asked Questions Section -->
</main>

<script>
    $('#signin').click(function(e) {
        e.preventDefault();

        let email = $('#email').val();
        let password = $('#password').val();
        let token = $("meta[name='csrf-token']").attr("content");

        $.ajax({

            url: `/member/signin`,
            type: "POST",
            cache: false,
            data: {
                "email": email,
                "password": password,
                "_token": token
            },
            success: function(response) {

                console.log(response);

                if(response.success){
                    window.location.replace("/posts");
                }else{

                }



            },
            error: function(error) {

                console.log(error);

            }

        });
    });
</script>
<!-- End #main -->
@endsection
