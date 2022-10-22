<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/auth/dashboard") ?>">Home</a></li>
                            <li class="breadcrumb-item active">Update Blog</li>
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
                                <h3 class="card-title">Update Blog Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->session->flashdata("success")) {
                                    echo $this->session->flashdata("success");
                                    
                                } else {
                                    echo $this->session->flashdata("error");
                                    
                                } ?>
                                <form action="<?php echo base_url("admin/blog/updateBlog/") ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Blog Title</label>
                                                <textarea class="form-control" rows="8" name="blog_title" id="blog_title"><?php echo $getBlogById->blog_title;?></textarea>
                                                <span><b><?php echo form_error("blog_title"); ?></b></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Blog Short Description</label>
                                                <textarea class="form-control" rows="8" name="blog_short_description" id="blog_short_description" placeholder="Enter ..."><?php echo $getBlogById->blog_short_description;?></textarea>
                                                <span><b><?php echo form_error("blog_short_description"); ?></b></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Blog Content</label>
                                                <textarea class="form-control" rows="8" name="blog_content" id="blog_content" placeholder="Enter ..."><?php echo $getBlogById->blog_content;?></textarea>
                                                <span><b><?php echo form_error("blog_content"); ?></b></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="blog_image">Blog Image</label>
                                                <br>
                                                <input type="file" value="<?php echo $getBlogById->blog_image;?>" name="blog_image">
                                                <span><b><?php echo form_error("blog_image"); ?></b></span>
                                            </div>


                                            <div class="form-group">
                                                <label>Blog Category</label>
                                                <select name="blog_category" class="form-control">
                                                    <option value="parking">Select Category</option>
                                                    <option value="parking">parking</option>
                                                    <option value="info">info</option>
                                                </select>
                                                <span><b><?php echo form_error("blog_category"); ?></b></span>
                                            </div>

                                            <div class="form-group">
                                                <label>Blog Status</label>
                                                <select class="form-control" name="blog_status">
                                                    <option value="">Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                                <span><b><?php echo form_error("blog_status"); ?></b></span>
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-success">Add Blog</button>
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