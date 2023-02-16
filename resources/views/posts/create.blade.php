<!-- Modal -->
<div class="modal fade" id="modal-show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM POST</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" id="post_id">

                <div class="form-group">
                    <label for="adult" class="control-label">Adult</label>
                    <input type="text" class="form-control" id="adult">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-adult"></div>
                </div>


                <div class="form-group">
                    <label class="control-label">Backdrop Path</label>
                    <input type="text" class="form-control" id="backdrop_path" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-backdrop_path"></div>
                </div>


                <div class="form-group">
                    <label class="control-label">Genre Ids</label>
                    <input type="text" class="form-control" id="genre_ids" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-genre_ids"></div>
                </div>



                <div class="form-group">
                    <label class="control-label">Original ID</label>
                    <input type="text" class="form-control" id="original_id" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-original_id"></div>
                </div>



                <div class="form-group">
                    <label class="control-label">Original Language</label>
                    <input type="text" class="form-control" id="original_language" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-original_language"></div>
                </div>



                <div class="form-group">
                    <label class="control-label">Original Title</label>
                    <textarea class="form-control" id="original_title" rows="4"></textarea>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-original_title"></div>
                </div>

                <div class="form-group">
                    <label class="control-label">Title</label>
                    <textarea class="form-control" id="title" rows="4"></textarea>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-title"></div>
                </div>


                <div class="form-group">
                    <label class="control-label">Overview</label>
                    <textarea class="form-control" id="overview" rows="4"></textarea>
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-overview"></div>
                </div>




                <div class="form-group">
                    <label class="control-label">Popularity</label>
                    <input type="text" class="form-control" id="popularity" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-popularity"></div>
                </div>




                <div class="form-group">
                    <label class="control-label">Poster Path</label>
                    <input type="text" class="form-control" id="poster_path" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-poster_path"></div>
                </div>




                <div class="form-group">
                    <label class="control-label">Release Date</label>
                    <input type="text" class="form-control" id="release_date" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-release_date"></div>
                </div>



                <div class="form-group">
                    <label class="control-label">Video</label>
                    <input type="text" class="form-control" id="video" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-video"></div>
                </div>





                <div class="form-group">
                    <label class="control-label">Vote Average</label>
                    <input type="text" class="form-control" id="vote_average" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-vote_average"></div>
                </div>




                <div class="form-group">
                    <label class="control-label">Vote Count</label>
                    <input type="text" class="form-control" id="vote_count" rows="4">
                    <div class="alert alert-danger mt-2 d-none" role="alert" id="alert-vote_count"></div>
                </div>






            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="button" class="btn btn-primary" id="update">UPDATE</button>
                <button type="button" class="btn btn-primary" id="store">SIMPAN</button>
            </div>
        </div>
    </div>
</div>

<script>
    //button create post event
    $('body').on('click', '#btn-create-post', function() {

        $('#post_id').val("");

        $('#adult').val("");
        $('#backdrop_path').val("");
        $('#genre_ids').val("");
        $('#original_id').val("");
        $('#original_language').val("");
        $('#original_title').val("");
        $('#overview').val("");
        $('#popularity').val("");
        $('#poster_path').val("");
        $('#release_date').val("");
        $('#title').val("");
        $('#video').val("");
        $('#vote_average').val("");
        $('#vote_count').val("");

        //open modal
        $('#modal-show').modal('show');
    });

    //action create post
    $('#store').click(function(e) {
        e.preventDefault();

        //define variable
        let adult = $('#adult').val();
        let backdrop_path = $('#backdrop_path').val();
        let genre_ids = $('#genre_ids').val();
        let original_id = $('#original_id').val();
        let original_language = $('#original_language').val();
        let original_title = $('#original_title').val();
        let overview = $('#overview').val();
        let popularity = $('#popularity').val();
        let poster_path = $('#poster_path').val();
        let release_date = $('#release_date').val();
        let title = $('#title').val();
        let video = $('#video').val();
        let vote_average = $('#vote_average').val();
        let vote_count = $('#vote_count').val();

        let token = $("meta[name='csrf-token']").attr("content");

        //ajax
        $.ajax({

            url: `/posts`,
            type: "POST",
            cache: false,
            data: {
                "adult": adult,
                "backdrop_path": backdrop_path,
                "genre_ids": genre_ids,
                "original_id": original_id,
                "original_language": original_language,
                "original_title": original_title,
                "overview": overview,
                "popularity": popularity,
                "poster_path": poster_path,
                "release_date": release_date,
                "title": title,
                "video": video,
                "vote_average": vote_average,
                "vote_count": vote_count,
                "_token": token
            },
            success: function(response) {

                //show success message
                Swal.fire({
                    type: 'success',
                    icon: 'success',
                    title: `${response.message}`,
                    showConfirmButton: false,
                    timer: 3000
                });

                //data post
                let post = `
                    <tr id="index_${response.data.id}">
                        <td>${response.data.title}<br/><small><i>${response.data.original_title}</i></small><br/><small>${response.data.release_date}</small></td>

                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                `;

                //append to table
                $('#table-posts').prepend(post);

                //clear form
                $('#post_id').val("");

                $('#adult').val("");
                $('#backdrop_path').val("");
                $('#genre_ids').val("");
                $('#original_id').val("");
                $('#original_language').val("");
                $('#original_title').val("");
                $('#overview').val("");
                $('#popularity').val("");
                $('#poster_path').val("");
                $('#release_date').val("");
                $('#title').val("");
                $('#video').val("");
                $('#vote_average').val("");
                $('#vote_count').val("");

                //close modal
                $('#modal-show').modal('hide');


            },
            error: function(error) {

                console.log(error);

            }

        });

    });
</script>
