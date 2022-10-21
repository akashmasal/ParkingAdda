<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Faq</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/auth/dashboard") ?>">Home</a></li>
                            <li class="breadcrumb-item active">Add Faq</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- right column -->
                    <div class="col-md-12">
                        <!-- general form elements disabled -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Add Faq Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->session->flashdata("success")) {
                                    echo $this->session->flashdata("success");
                                    
                                } else {
                                    echo $this->session->flashdata("error");
                                    
                                } ?>
                                <form action="<?php echo base_url("admin/Faq/addFaq") ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Faq Title</label>
                                                <textarea class="form-control" rows="8" name="faq_title" id="faq_title" placeholder="Enter ..."></textarea>
                                                <span><b><?php echo form_error("faq_title"); ?></b></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Faq Content</label>
                                                <textarea class="form-control" rows="8" name="faq_content" id="faq_content" placeholder="Enter ..."></textarea>
                                                <span><b><?php echo form_error("faq_content"); ?></b></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Faq Status</label>
                                                <select class="form-control" name="faq_status">
                                                    <option value="">Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                                <span><b><?php echo form_error("faq_status"); ?></b></span>
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-success">Add Faq</button>
                                            </div>

                                        </div>
                                    </div>


                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->