<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('content') ?>

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Project Create</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/createproject'); ?>"><i
                                    class="iconly-Home icli svg-color"></i></a>
                        </li>
                        <li class="breadcrumb-item">Project</li>
                        <li class="breadcrumb-item active">Project Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form theme-form basic-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Project Title </h5>
                                        <input class="form-control" type="text" placeholder="Project name *">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Client name</h5>
                                        <input class="form-control" type="text"
                                            placeholder="Name client or company name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Project Rate</h5>
                                        <input class="form-control" type="text" placeholder="Enter project Rate">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Project Type</h5>
                                        <select class="form-select">
                                            <option>Hourly</option>
                                            <option>Fix price</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Priority</h5>
                                        <select class="form-select">
                                            <option>Low</option>
                                            <option>Medium</option>
                                            <option>High</option>
                                            <option>Urgent</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Project Size </h5>
                                        <select class="form-select">
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Big</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Starting date</h5>
                                        <input class="datepicker-here form-control" type="text" data-language="en">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Ending date</h5>
                                        <input class="datepicker-here form-control" type="text" data-language="en">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Enter some Details</h5>
                                        <textarea class="form-control" id="exampleFormControlTextarea4"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <h5 class="f-w-600 mb-2">Upload project file</h5>
                                        <form class="dropzone" id="singleFileUpload" action="/upload.php">
                                            <div class="dz-message needsclick"> <i
                                                    class="fa-solid fa-cloud-arrow-up"></i>
                                                <h6>Drop files here or click to upload. </h6><span
                                                    class="note needsclick">(This is just a demo dropzone. Selected
                                                    files are<strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end"> <a class="btn btn-success me-3" href="#">Add</a><a
                                            class="btn btn-danger" href="#">Cancel </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>