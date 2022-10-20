<div class="carousel-inner">
    <div class="item active">
        <div class="opstrip">
            <h1>Our Authorised Places</h1>
        </div>
    </div>
</div>
<br><br><br><br>
<!-- about us slider -->
<div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container op">
                    <div class="row">
                        <center>
                            <h2 class="paptext">ParkingAdda Authorised Places</h2>
                        </center><br><br>
                        
                        
                        <table class="table table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">PLACE NAME</th>
                              <th scope="col">LOCATION</th>
                            </tr>
                          </thead>
                          
                          <?php
                            if($get_places > 0)
                            {
                                $id = 1;
                                foreach($get_places as $gp)
                                {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $id;?></th>
                                            <td><?php echo $gp->placename;?></td>
                                            <td><?php echo $gp->place_address;?></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    $id++;
                                }
                            }
                            else
                            {
                                ?>
                                <tbody>
                                    <tr>
                                        <th scope="row">NO DATA FOUND</th>
                                    </tr>
                                </tbody>
                                <?php
                            }
                          
                          ?>
                          
                          
                        </table>
                        
                    </div>
                    <br><br><br>
                
                    <div class="container">
                        <center>
                            <h4 class="text-center mppwbcs">More Parking Places Will be Coming Soon.</h4><br>
                        </center>
                    </div>
                    <!--/.row-->
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
        </div>
    </div>
    <!--/#carousel-slider-->
</div>
<!--/#about-slider-->

<br><br><br><br>


<style>
    .opstrip
    {
        background-image: url('<?php echo base_url();?>assets/images/aboutusparkingaddabanner.jpg');
        height: 180px;
        text-align: center;
        padding: 5%;
        font-family: 'Varela Round', sans-serif;
    }

    .opstrip h1{
        font-size: 46px;
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
