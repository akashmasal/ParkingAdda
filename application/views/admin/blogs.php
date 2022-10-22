<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blogs Table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blogs Table</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blogs List</h3> <a href="<?php echo base_url("admin/blog/addBlogView"); ?>"><button class="btn btn-success btn-sm float-right"><i class="fa-solid fa-square-plus"></i></button></a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>BLOG TITLE</th>
                                        <th>BLOG SHORT DESCRIPTION</th>
                                        <th>CREATED DATE</th>
                                        <th>BLOG CATEGORY</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <?php if (count($getAllBlogs) > 0) {
                                    foreach ($getAllBlogs as $blogs) {
                                ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $blogs->blog_id; ?></td>
                                                <td><?php echo $blogs->blog_title; ?></td>
                                                <td><?php echo $blogs->blog_short_description; ?></td>
                                                <td><?php echo $blogs->blog_created_date; ?></td>
                                                <td><?php echo $blogs->blog_category; ?></td>
                                                <td>
                                                    <a style="color:green; font-size:20px" href="<?php echo base_url("admin/blog/updateBlogView/" . $blogs->blog_id); ?>">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <a style="color:red; font-size:20px" href="<?php echo base_url("admin/blog/deleteBlog/" . $blogs->blog_id); ?>">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>NO DATA FOUND</td>
                                        </tr>
                                    </tbody>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                        <!-- /.card-body -->



                        <!-- <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </div> -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->