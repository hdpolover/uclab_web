<div class="row mb-0">
    <div class="col-8">
        <h2 class="mb-0">Information</h2>
    </div>
</div>
<hr>

<div class="row mb-2">
    <div class="col-12">
        <div class="alert alert-info">
            <i class="icon-info"></i><strong>Information</strong> You can manage your website information in here, from
            adding hero to adding social media and others stuff.
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-header-title mb-4">Website information</h4>
                <form action="<?= site_url('admin/change_websiteInfo'); ?>" method="post">
                    <div class="mb-2">
                        <label for="inputTitle">Title</label>
                        <input type="text" class="form-control" id="inputTitle" name="title" value="<?= $w_title; ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="inputLogo">Logo</label><br>
                        <button type="button" data-toggle="modal" data-target="#change-icon" class="button button-small button-circle button-border button-aqua" data-target="#change-icon"><i class="icon-inbox"></i>change icon</button>
                        <button type="button" data-toggle="modal" data-target="#change-logo" class="button button-small button-circle button-border button-aqua" data-target="#change-logo"><i class="icon-image"></i>change logo</button>
                    </div>
                    <div class="mb-2">
                        <label for="inputDescription">Description</label>
                        <textarea type="text" class="form-control" id="inputDescription" name="description" maxlength="300" rows="3" required><?= $w_description; ?></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address" value="<?= $w_address; ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="inputPhone">Contact Phone</label>
                        <input type="text" class="form-control" id="inputPhone" name="phone" value="<?= $w_phone; ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="inputEmail">Contact Email</label>
                        <input type="text" class="form-control" id="inputEmail" name="email" value="<?= $w_email; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-info mt-3 float-right" id="send-button">Save
                        Information</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h4 class="card-header-title mb-4">Website content</h4>
                <div class="mb-2">
                    <label for="inputAbout">Home content</label><br>
                    <button type="button" class="button button-small button-circle button-border button-aqua" data-toggle="modal" data-target="#hero_section"><i class="icon-desktop"></i>Change hero section</button>
                    <button type="button" class="button button-small button-circle button-border button-aqua" data-toggle="modal" data-target="#featured_content"><i class="icon-feather-alt"></i>Featured content</button>
                </div>
                <div class="mb-2">
                    <label for="inputAbout">About your website</label><br>
                    <button type="button" class="button button-small button-circle button-border button-aqua" data-toggle="modal" data-target="#about_website"><i class="icon-clipboard"></i>Change about</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="hero_section" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hero_section">Update hero section</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/change_hero'); ?>" method="post" enctype="multipart/form-data" class="mb-0">
                    <div class="mb-2">
                        <label for="">Background</label>
                        <input id="input-hero" name="image" type="file" class="file-loading" data-show-upload="false" accept="image/*" data-show-preview="false">
                    </div>
                    <div class="mb-2">
                        <label for="heroTitle">Title</label>
                        <input type="text" class="form-control" id="heroTitle" name="hero_title" value="<?= $hero->name; ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="heroDescription">Description</label>
                        <textarea class="form-control" id="heroDescription" name="hero_description" maxlength="300" rows="3"><?= $hero->value; ?></textarea>
                    </div>
                    <div class="modal-footer px-0">
                        <button type="submit" class="btn btn-info" id="send-button">Update hero</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="about_website" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hero_section">About your website</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/change_websiteContent'); ?>" method="post" class="mb-0">
                    <label for="inputAbout">About your website</label>
                    <textarea name="about" class="form-control" id="inputAbout" rows="3"><?= $w_about; ?></textarea>
                    <div class="modal-footer px-0">
                        <button type="submit" class="btn btn-info" id="send-button">Update about</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="change-icon" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?= site_url('admin/change_icon'); ?>" method="post" enctype="multipart/form-data" class="mb-0">
                    <div class="center">
                        <h4>Change website icon
                            <button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close"></button>
                        </h4>
                        <input id="input-icon" name="image" type="file" class="file-loading" accept="image/*" data-show-preview="false">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="change-logo" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?= site_url('admin/change_logo'); ?>" method="post" enctype="multipart/form-data" class="mb-0">
                    <div class="center">
                        <h4>Change website logo
                            <button type="button" class="btn-close float-right" data-dismiss="modal" aria-label="Close"></button>
                        </h4>
                        <input id="input-logo" name="image" type="file" class="file-loading" accept="image/*" data-show-preview="false">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="featured_content" tabindex="-1" aria-labelledby="hero_section" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hero_section">Featured content</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/change_featured'); ?>" method="post" class="mb-0">
                    <div class="mb-2">
                        <label for="featuredTitle">Title</label>
                        <input type="text" class="form-control" id="featuredTitle" name="featured_title" value="<?= $featured->name; ?>" required>
                    </div>
                    <div class="mb-2">
                        <label for="featuredDescription">Description</label>
                        <textarea class="form-control" id="featuredDescription" name="featured_description" maxlength="200" rows="3"><?= $featured->value; ?></textarea>
                    </div>
                    <div class="modal-footer px-0">
                        <a href="<?= site_url('admin/change_featuredHide'); ?>" class="btn btn-secondary" data-dismiss="modal">Hide</a>
                        <button type="submit" class="btn btn-info" id="send-button">Update featured content</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('form').submit(function(event) {
        $('#send-button').prop("disabled", true);
        // add spinner to button
        $('#send-button').html(
            `Loading...`
        );
        return;
    });

    ClassicEditor
        .create(document.querySelector('#inputAbout'), {
            toolbar: ['heading', '|',
                'fontfamily', 'fontsize', '|',
                'alignment', '|',
                'fontColor', 'fontBackgroundColor', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                'link', '|',
                'outdent', 'indent', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'code', 'codeBlock', '|',
                'insertTable', 'blockQuote', '|',
                'undo', 'redo'
            ],
            shouldNotGroupWhenFull: true
        })
        .catch(error => {
            console.log(error);
        });

    ClassicEditor
        .create(document.querySelector('#heroDescription'), {
            toolbar: ['heading', '|',
                'fontfamily', 'fontsize', '|',
                'alignment', '|',
                'fontColor', 'fontBackgroundColor', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                'undo', 'redo'
            ],
            shouldNotGroupWhenFull: true
        })
        .catch(error => {
            console.log(error);
        });

    ClassicEditor
        .create(document.querySelector('#featuredDescription'), {
            toolbar: ['heading', '|',
                'fontfamily', 'fontsize', '|',
                'alignment', '|',
                'fontColor', 'fontBackgroundColor', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                'undo', 'redo'
            ],
            shouldNotGroupWhenFull: true
        })
        .catch(error => {
            console.log(error);
        });
</script>