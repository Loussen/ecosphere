<?php
include "pages/includes/config.php";
if(isset($_GET["do"])) $do=safe($_GET["do"]); else $do='';
$do=str_replace(array("../","./","/"),"",$do);
include "pages/includes/check.php";
if(intval($user["id"])==0){header("Location: login.php"); exit('Go go go...'); die('Go go go...');}
include "pages/includes/function_thumb.php";
include "pages/includes/resize_class.php";
//$main_lang=1;

$checkboxes=safe($_GET["checkboxes"]);
if($checkboxes!=''){
	$checkboxes=substr($checkboxes,1,-1);	$checkboxes=str_replace("-",",",$checkboxes);
	$forId=intval($_GET["forId"]);		if($forId==1) $column='id'; else $column='auto_id';
	$checkbox_del=intval($_GET["checkbox_del"]);
	$active=intval($_GET["active"]);
	if($checkbox_del==1){
		mysqli_query($db,"delete from $do where $column in (".$checkboxes.") ");
		if($do=='mehsullar'){
			$sql=mysqli_query($db,"select id,tip,xeber_id from sekiller2 where xeber_id in (".$checkboxes.") ");
			while($row=mysqli_fetch_assoc($sql)){
				@unlink('../images/gallery2/'.$row["xeber_id"].'/'.$row["id"].'.'.$row["tip"]);
				@unlink('../images/gallery2/'.$row["xeber_id"].'/'.$row["id"].'_thumb.'.$row["tip"]);
			}
			mysqli_query($db,"delete from sekiller2 where xeber_id='$delete' ");
		}
	}
	elseif($active>0){
		if($active==2) $active=0; else $active=1;
		if($do=='mehsullar' && $active==1){
			$sql=mysqli_query($db,"select id,xeber_id from sekiller2 where xeber_id in (".$checkboxes.") and active=1 ");
			while($row=mysqli_fetch_assoc($sql)){
				mysqli_query($db,"update $do set active='$active' where auto_id='$row[xeber_id]' ");
			}
		}
		else mysqli_query($db,"update $do set active='$active' where $column in (".$checkboxes.") ");
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head><?php include "pages/layouts/head.php"; ?></head>
<body>
<div class="content_wrapper">
	<?php include "pages/layouts/top.php"; ?>
	<?php include "pages/layouts/menu.php"; ?>
	<div id="content">
		<div class="inner">
			<?php
			if(is_file("pages/".$do.".php")) include "pages/".$do.".php";
			else echo '<center><strong id="basliq1"><h1>Erasmusplus</h1>
</strong></center>
            <br>
            <div class="page">
<p style="text-align: right;"><i>Milli Erasmus + Ofis Avropa Komissiyası, Təhsil, Audiovizual və Mədəniyyət üzrə İcraçı Agentliyinin (EACEA) və milli hakimiyyət orqanlarınin dəstəyi ilə ERASMUS + Proqramıni həyata keçirir. NEO Azərbaycanda təhsil siyasətinin inkişafını , xüsusilə də ali təhsil sahəsində, həmçinin təhsilin digər səviyyələrində yaxindan izleyir.
Erasmus+ proqrami çərçivəsinde (ali) təhsilde AI əməkdaşlıq fəaliyyətinə uyğun olaraq AB nümayəndəliyi ile yanaşı , NEO bütün iştirakçılar ,potensial müraciətçilər (ərizəçilər ) və digər maraqli tərəflər üçün ölkədə fokus nöqtəsidir.
Erasmus + ofisin vəzifələri bütünlükde aşağıdakıları əhatə edir : tərəfdaş ölkələrlə ali təhsildə əməkdaşlığa istiqamətlənən Erasmus + fəaliyyəti ile bağli dəstək, təşviq, monitorinq ve yayılma fəaliyyətləri (Əsas Fəaliyyətlər 1, 2 və 3).
</div>';
			?>
		</div>
		<?php include "pages/layouts/footer.php"; ?>		
	</div>
</div>
<input type="hidden" id="link_url" value="-" />
<input type="hidden" value="0" id="all_check_changed" />
<input type="hidden" id="delete_text1" value="<?=$lang116?>"/>
<input type="hidden" id="delete_text2" value="<?=$lang117?>"/>
<input type="hidden" id="tab_lang100" onclick="tab_select(this.id)" class="left_switch" value="test" style="width:50px">
</body>
</html>
