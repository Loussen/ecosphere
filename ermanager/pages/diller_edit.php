<?php $information=mysqli_fetch_assoc(mysqli_query($db,"select * from $do where id='$edit' ")); ?>Adı: <input type="text" name="name" value="<?php echo stripslashes($information["ad"]); ?>" style="margin-right:40px;width:30px;" />Tam adı: <input type="text" name="tam_adi" value="<?php echo stripslashes($information["tam_adi"]); ?>" style="margin-right:40px" />	Icon: <select name="flag" id="flag" onchange="show_flag(this.value)"><?php  $ac=opendir("images/flags/");  while($file=readdir($ac))  {	if(is_file("images/flags/".$file)) $flags[]=$file;  }  sort($flags);  foreach($flags as $key)  {	if($key==$information["flag"]) $selected='selected="selected"'; else $selected='';	echo '<option value="images/flags/'.$key.'" '.$selected.'>'.substr($key,0,strpos($key,"-")).'</option>';  }  unset($flags);?></select><?phpif($edit>0) $flag=$information["flag"]; else $flag="Azerbaijan-Flag-64.png";if($add==1) $flag='Afghanistan-Flag-64.png';?> <img id="flag_image" src="images/flags/<?php echo $flag; ?>" alt="" width="32" style="margin-bottom:-10px" /><br /><br/>