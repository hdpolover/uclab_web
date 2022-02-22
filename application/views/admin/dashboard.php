<div class="row mb-0">
    <div class="col-8">
        <h2 class="mb-0">Dashboard</h2>
        <p class="mb-0">Hai, <?= $this->session->userdata('name'); ?> - Malang, East Java</p>
    </div>
    <div class="col-4">
        <button class="btn btn-secondary float-right">Today</button>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-12">
        <div class="alert alert-info">
            <i class="icon-info"></i><strong>Development version!</strong> This is a development version, after release. We include thrice improvement features with a month of support.
        </div>
    </div>
</div>
<div class="row col-mb-50">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h2 class="card-text mt-3 mb-5">Hai <?= $this->session->userdata('name'); ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-2"><b>Total gallery</b></h4>
                <h1 class="mb-1">120</h1>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-2"><b>Total foundation</b></h4>
                <h1 class="mb-1">3000</h1>
            </div>
        </div>
    </div>
</div>