<?php 
//session_start();

if($_SESSION['domain']=='guru'){
	$id_guru=$_SESSION['id_guru'];
	$username=ucwords($_SESSION['username']);
	
	$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from data_guru where id_guru='$id_guru'"));

	$kelamin=$data['kelamin'];
	
	if($kelamin=='laki-laki'){
		$sapaan='Pak ';
	}else{
		$sapaan='Ibu ';
	}
	
	$pengguna=$sapaan.$username;
}else{
	$pengguna=ucwords($_SESSION['username']);
}

?>

<div id="page-heading">
    <h1>Assalamu'alaikum, <?php echo $pengguna;?> :)</h1>
</div>
<!-- end page-heading -->

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
    <td id="tbl-border-left"></td>
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
    		
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left"><marquee><b>Selamat Datang di web Sistem Informasi Nilai Online </b></marquee></td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
          
			<!--  start message-yellow -->
            
            <div id="message-yellow">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
                <td class="yellow-right"><a class="close-yellow"><img src="images/table/icon_close_yellow.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
            <!--  end message-yellow -->
            
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                <div id="table-content">
                <p align="center"><img src="images/akhlak-mulia.jpg"></p> <right> 
                1.	Layanan informasi nilai ini hanya  diberikan untuk murid yang masih aktif pada semester berjalan.<br /> 
2.	User Name dan Password yang digunakan adalah Account User Name dan Password NIS.
<br /> 
3.	Data pada sistem layanan informasi nilai ini merupakan data salinan dari server utama, dengan demikian akan ada rentang waktu untuk perubahan data.
<br />
4.	Jika ada perbedaan informasi nilai antara server utama dengan informasi pada sistem ini, maka informasi yang ada pada server utama yang VALID dan informasi nilai secara formal akademik adalah Raport Nilai yang dikeluarkan oleh sekolah.
<br />
5.	Jika sudah selesai, pastikan anda menekan tombol Logout, kelalaian anda dapat merugikan anda sendiri.
                <br />
                <br />
               </right> 
                </div>
                <p align="center">  <b>SMK PIRI 3 YOGYAKARTA <br/>
									Jl. MT. HARYONO NO.23 PUGERAN YOGYAKARTA<br/>
									TELP. 0274-378453 website: <a href=""> www.smkpiri3yk.sch.id </a><br/>  </b><img src="images/smk bisa.jpg" width="189" height="141"></p>
                <!-- end id-form  -->
              </td>
              <td>
              	<!--  start related-activities -->
              	<?php include "pengumuman.php";
				?>              	<!-- end related-activities -->
				
              </td>
            </tr>
            <tr>
              <td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
              <td></td>
            </tr>
          </table>

      

	<div class="clear"></div>
     
    </div>
    <!--  end content-table-inner ............................................END  -->
    </td>
    <td id="tbl-border-right"></td>
</tr>
<tr>
    <th class="sized bottomleft"></th>
    <td id="tbl-border-bottom">&nbsp;</td>
    <th class="sized bottomright"></th>
</tr>
</table>
