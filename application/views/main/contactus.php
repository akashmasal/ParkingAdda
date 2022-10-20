<div class="carousel-inner">

    <div class="item active">

        <div class="contactstrip">

            <h1>Contact Us</h1>

        </div>

    </div>

</div>





<!-- <section id="contact-info">

    <div class="center">

        <h2>How to Reach Us?</h2> -->

        <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> -->

    <!-- </div>

    <div class="gmap-area">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <div class="gmap">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.530598993698!2d72.9234104145515!3d19.128237755299953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c78c5deb590b%3A0x1e75198164aecc49!2sBDS%20Services%20Private%20Limited!5e0!3m2!1sen!2sin!4v1654275018127!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div> -->



                <!-- <div class="col-sm-7 map-content">

                    <ul class="row">

                        <li class="col-sm-6">

                            <address>

                                <h5>Head Office</h5>

                                <p>1537 Flint Street <br>

                                    Tumon, MP 96911</p>

                                <p>Phone:670-898-2847 <br>

                                    Email Address:info@domain.com</p>

                            </address>



                            <address>

                                <h5>Zonal Office</h5>

                                <p>1537 Flint Street <br>

                                    Tumon, MP 96911</p>

                                <p>Phone:670-898-2847 <br>

                                    Email Address:info@domain.com</p>

                            </address>

                        </li>





                        <li class="col-sm-6">

                            <address>

                                <h5>Zone#2 Office</h5>

                                <p>1537 Flint Street <br>

                                    Tumon, MP 96911</p>

                                <p>Phone:670-898-2847 <br>

                                    Email Address:info@domain.com</p>

                            </address>



                            <address>

                                <h5>Zone#3 Office</h5>

                                <p>1537 Flint Street <br>

                                    Tumon, MP 96911</p>

                                <p>Phone:670-898-2847 <br>

                                    Email Address:info@domain.com</p>

                            </address>

                        </li>

                    </ul>

                </div> -->

            <!-- </div>

        </div>

    </div>

</section> -->

<!--/gmap_area -->





<br><br><br>

<section id="contact-page">

    <div class="container">

        <div class="alert" style="text-align:center;">

                <?php echo $this->session->flashdata('success');?>
                <?php echo $this->session->flashdata('error');?>

        </div>

        <div class="center">

            <h2>Drop Your Message</h2>

        </div>

        <div class="row contact-wrap">

            <div class="status alert alert-success" style="display: none"></div>

            <form class="contact-form" name="contact-form" method="post" action="<?php echo base_url();?>home/send">

                <div class="col-sm-5 col-sm-offset-1">

                    <div class="form-group">

                        <label>Name *</label>

                        <input type="text" name="name" id="name" class="form-control">

                    </div>

                    <div class="form-group">

                        <label>Email *</label>

                        <input type="email" name="email" id="email" class="form-control">

                    </div>

                    <div class="form-group">

                        <label>Phone</label>

                        <input type="number" name="phone" id="phone" class="form-control">

                    </div>

                    <div class="form-group">

                        <label>Company Name</label>

                        <input type="text" name="companyname" id="companyname" class="form-control">

                    </div>

                </div>

                <div class="col-sm-5">

                    <div class="form-group">

                        <label>Subject *</label>

                        <input type="text" name="subject" id="subject" class="form-control" >

                    </div>

                    <div class="form-group">

                        <label>Message *</label>

                        <textarea name="message" name="message" id="message"  class="form-control" rows="8"></textarea>

                    </div>

                    <div class="form-group">

                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit Message</button>

                    </div>

                </div>

            </form>

        </div>

        <!--/.row-->

    </div>

    <!--/.container-->

</section>

<!--/#contact-page-->



<style>

    .contactstrip {

        background-image: url('<?php echo base_url(); ?>assets/images/contactpagebanner.jpg');

        height: 180px;

        text-align: center;

        padding: 5%;

        font-family: 'Varela Round', sans-serif;

    }



    .contactstrip h1 {

        font-size: 50px;

        font-weight: bold;

        font-family: 'Varela Round', sans-serif;

    }

</style>


<!--Start of Tawk.to Script-->

<script type="text/javascript">

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

(function(){

var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

s1.async=true;

s1.src='https://embed.tawk.to/62d79ab87b967b11799a6a43/1g8d38ojv';

s1.charset='UTF-8';

s1.setAttribute('crossorigin','*');

s0.parentNode.insertBefore(s1,s0);

})();

</script>

<!--End of Tawk.to Script-->