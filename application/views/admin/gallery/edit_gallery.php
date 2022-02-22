<div class="row mb-0">
    <div class="col-8">
        <h2 class="mb-0">Add New Gallery</h2>
    </div>
    <div class="col-4">
        <a href="<?= site_url('dashboard/list-gallery'); ?>" class="btn btn-primary float-right"><i class="fa fa-image mr-1"></i> List gallery</a>
    </div>
</div>
<hr>

<form action="<?= site_url('admin/procces_addNew'); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-header-title mb-0">
                        Gallery content
                    </h4>
                    <hr class="my-2">
                    <div class="mb-3">

                    </div>
                    <button type="submit" class="btn btn-info float-right" id="send-submit">Add gallery</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-header-title mb-0">
                        Gallery information
                    </h4>
                    <hr class="my-2">
                    <div class="mb-3">
                        <label for="inputTitle">Title</label>
                        <input type="text" class="form-control" id="inputTitle" placeholder="Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputCategories">Categories</label>
                        <div class="row mr-0">
                            <div class="col-11">
                                <select class="form-control" name="categories" id="inputCategories" required>
                                    <option value="">Testing</option>
                                </select>
                            </div>
                            <div class="col-1 px-0">
                                <a href="" class="btn btn-info btn-block" target="_blank"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputDescription">Description</label>
                        <textarea type="text" class="form-control" id="inputDescription" rows="3" placeholder="Description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputTags">Tags</label>
                        <input type="text" class="form-control tagsinput" id="inputTags" placeholder="Tags" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<!-- id submit button clicked -->
<script>
    $("#form").on('submit', function(e) {
        $('#btn-submit').html(
            '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span> Loading...'
        ).addClass('disabled');
        Swal.fire({
            title: 'Loading...',
            text: 'Please wait, adding data.',
            imageUrl: 'https://im7.ezgif.com/tmp/ezgif-7-18a9a35278.gif',
            // imageWidth: 400,
            // imageHeight: 200,
            imageAlt: 'loading',
            allowOutsideClick: false,
            showCancelButton: false,
            showConfirmButton: false,
        })
    });

    $('input').on('keypress', function(event) {
        var regex = new RegExp("^[a-zA-Z0-9_ ]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    });

    $('#inputTags').tagsInput({
        'width': 'auto',
        'delimiter': ',',
        'defaultText': 'Tag',
        onAddTag: function(item) {
            $($(".tagsinput").get(0)).find(".tag").each(function() {
                if (!ValidateText($(this).text().trim().split(/(\s+)/)[0])) {
                    $(this).addClass("badge-primary");
                }
            });
        },
        'onChange': function(item) {
            $($(".tagsinput").get(0)).find(".tag").each(function() {
                if (!ValidateText($(this).text().trim().split(/(\s+)/)[0])) {
                    $(this).addClass("badge-primary");
                }
            });
        }

    });

    function ValidateText(mail) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
            return (true)
        }
        return (false)
    }
</script>