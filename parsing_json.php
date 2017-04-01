<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$url_json=file_get_contents("http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-31");
	$json_object=json_decode($url_json);	
     ?>
            <center>
            <h3>Data Absensi Mobile</h3>
            <table border=1 cellspacing=0 cellspacing=5>
            <tr>
            	<td>id</td>
            	<td>nip</td>
            	<td>latitude</td>
            	<td>longitude</td>
            	<td>presensi_ke</td>
            	<td>photo</td>
            	<td>macaddress</td>
            	<td>created_at</td>			
            </tr>
            <?php
            for ($i=0 ; $i<2; $i++){
            	$link =$json_object->presensi->data_absensi_mobile[$i]->photo;
            echo "
            <tr>
            	<td>".$json_object->presensi->data_absensi_mobile[$i]->id."</td>
            	<td>".$json_object->presensi->data_absensi_mobile[$i]->nip."</td>
            	<td>".$json_object->presensi->data_absensi_mobile[$i]->latitude."</td>
            	<td>".$json_object->presensi->data_absensi_mobile[$i]->longitude."</td>
            	<td>".$json_object->presensi->data_absensi_mobile[$i]->presensi_ke."</td>
            	<td><a href='$link' target='_blank'>Foto</a></td>
            	<td>".$json_object->presensi->data_absensi_mobile[$i]->macaddress."</td>
            	<td>".$json_object->presensi->data_absensi_mobile[$i]->created_at."</td>

            </tr>";}?>
            </table>
            <h3>Data Absensi Finger</h3>
            <table border=1 cellspacing=0 cellspacing=5>
            <tr>
            	<td>finger id</td>
            	<td>nip</td>
            	<td>tag date</td>
            	<td>finger ip</td>		
            </tr>
            <?php
            echo "
            <tr>
            	<td>".$json_object->presensi->data_absensi_finger[0]->finger_id."</td>
            	<td>".$json_object->presensi->data_absensi_finger[0]->nip."</td>
            	<td>".$json_object->presensi->data_absensi_finger[0]->tag_date."</td>
            	<td>".$json_object->presensi->data_absensi_finger[0]->finger_ip."</td>
            </tr>";?>
            </table>
            <table>
            	<tr>
            		<td>Latest Update</td>
            	</tr>
            	<tr>
            		<td><?php echo $json_object->presensi->latest_update;?></td>
            	</tr>	

            </table>
            </center>


</body>
</html>