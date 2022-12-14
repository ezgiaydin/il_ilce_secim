    <?php 
include "inc/baglan.php"; 

$icerik="SELECT * FROM icerik "; 
$sorgu=mysqli_query($baglan,$icerik);
$icerikcek=mysqli_fetch_assoc($sorgu); 

$ayarlar="SELECT * FROM ayarlar"; 
$lsorgu=mysqli_query($baglan,$ayarlar);
$ayarcek=mysqli_fetch_assoc($lsorgu);

$ilcek="SELECT * FROM iller";
$ilsorgu=mysqli_query($baglan,$ilcek); 

$ilcecek="SELECT * FROM ilceler";
$ilcesorgu=mysqli_query($baglan,$ilcecek); 
?>


<?php include "inc/navbar.php"; ?>


<section class="search-banner text-white py-3 form-arka-plan" id="search-banner">
    <div class="container py-5 my-5">
        <div class="row text-center pb-4">
            <div class="col-md-12">
                <h2 style="color: black">Ask to the Turkey</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card acik-renk-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <form method="POST" action="searchdetay.php">
                                 <!-- <input type="text" name="ara" placeholder="arayın"> -->
                                 <div class="form-group ">
                                    <select id="il" class="form-control"  >
                                        <option selected >Seçim Yapınız</option>
                                        <?php  while($ilcek = mysqli_fetch_assoc($ilsorgu)) { ?>
                                           <option  value="<?php echo $ilcek['il_kod'] ?>" id="<?php echo $ilcek['il_kod'] ?> "><?php echo $ilcek['il_adi'] ?> </option>
                                       <?php }?>
                                       
                                   </select>
                                  


                               </div>
                           </div>
                           <div class="col-md-4">
                            <div class="form-group ">
                                <select id="ilce" class="form-control" name="ara" required="required" >
                                    
                                    <?php  while($ilcecek = mysqli_fetch_assoc($ilcesorgu)) { ?>
                                    <option value="<?php echo $ilcecek['ilce_adi'] ?>" id="<?php echo $ilcecek['ilce_il_kodu'] ?>"><?php echo $ilcecek['ilce_adi'] ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-dark pl-5 pr-5">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Kaliteli Hizmeti Bul</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis tellus at ligula vehicula fringilla sed non nibh. Vivamus porta dui a metus hendrerit aliquet. Mauris in feugiat nulla, in dictum mauris.</p>
			</div>
			<div class="col-md-6">
				<img style="width: 500px;" src="<?php echo $icerikcek['hizmet']; ?>">
			</div>
			<div class="row">
				<div class="col-md-6">
					<img style="width: 500px;" src="<?php echo $icerikcek['garanti']; ?>">
				</div>
				<div class="col-md-6">
					<h3 class="text-right">Garantide Ol</h3>
					<p class="text-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis tellus at ligula vehicula fringilla sed non nibh. Vivamus porta dui a metus hendrerit aliquet. Mauris in feugiat nulla, in dictum mauris.</p>
					
				</div>
				
			</div>
			
		</div>
	</div>
</section>
</body>


<?php include "inc/footer.php"; ?>


</html>