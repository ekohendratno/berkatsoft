<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT POST</h5>
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
            </div>
        </div>
    </div>
</div>

<script>
    //button create post event
    $('body').on('click', '#btn-edit-post', function() {

        let post_id = $(this).data('id');

        //fetch detail post with ajax
        $.ajax({
            url: `/posts/${post_id}`,
            type: "GET",
            cache: false,
            success: function(response) {

                //fill data to form
                $('#post_id').val(response.data.id);
                $('#adult').val(response.data.adult);
                $('#backdrop_path').val(response.data.backdrop_path);
                $('#genre_ids').val(response.data.genre_ids);
                $('#original_id').val(response.data.original_id);
                $('#original_language').val(response.data.original_language);
                $('#original_title').val(response.data.original_title);
                $('#overview').val(response.data.overview);
                $('#popularity').val(response.data.popularity);
                $('#poster_path').val(response.data.poster_path);
                $('#release_date').val(response.data.release_date);
                $('#title').val(response.data.title);
                $('#video').val(response.data.video);
                $('#vote_average').val(response.data.vote_average);
                $('#vote_count').val(response.data.vote_count);

                //open modal
                $('#modal-edit').modal('show');
            }
        });
    });

    //action update post
    $('#update').click(function(e) {
        e.preventDefault();

        //define variable
        let post_id = $('#post_id').val();
        let title = $('#title-edit').val();
        let content = $('#content-edit').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //ajax
        $.ajax({

            url: `/posts/${post_id}`,
            type: "PUT",
            cache: false,
            data: {
                "title": title,
                "content": content,
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
                        <td>${response.data.title}<br/>${response.data.release_date}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" id="btn-edit-post" data-id="${response.data.id}" class="btn btn-primary btn-sm">EDIT</a>
                            <a href="javascript:void(0)" id="btn-delete-post" data-id="${response.data.id}" class="btn btn-danger btn-sm">DELETE</a>
                        </td>
                    </tr>
                `;

                //append to post data
                $(`#index_${response.data.id}`).replaceWith(post);

                //close modal
                $('#modal-edit').modal('hide');


            },
            error: function(error) {

                if (error.responseJSON.title[0]) {

                    //show alert
                    $('#alert-title-edit').removeClass('d-none');
                    $('#alert-title-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-title-edit').html(error.responseJSON.title[0]);
                }

                if (error.responseJSON.content[0]) {

                    //show alert
                    $('#alert-content-edit').removeClass('d-none');
                    $('#alert-content-edit').addClass('d-block');

                    //add message to alert
                    $('#alert-content-edit').html(error.responseJSON.content[0]);
                }

            }

        });

    });
</script>
