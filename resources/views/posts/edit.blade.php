

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

                console.log(response)

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
                $('#modal-show').modal('show');
            }
        });
    });

    //action update post
    $('#update').click(function(e) {
        e.preventDefault();

        //define variable
        let post_id = $('#post_id').val();

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

            url: `/posts/${post_id}`,
            type: "PUT",
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

                //append to post data
                $(`#index_${response.data.id}`).replaceWith(post);

                //close modal
                $('#modal-show').modal('hide');


            },
            error: function(error) {

                console.log(error);

            }

        });

    });
</script>
