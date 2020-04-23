<?php include 'view/header.php';?>

	<h1>သတင်းပြင်ဆင်ခြင်း/ကြည့်ရှု့ခြင်း</h1>
	<div class="inputdiv">
		<table class="tablea" id="newsTable" border="1">
			<thead><tr><th>စဉ်</th><th>ခေါင်းစဉ်</th><th>စာပိုဒ်</th><th>ရက်စွဲ</th><th>ဓါတ်ပုံ</th><th>ပြင်ဆင်ရန်</th><th>ဖျက်ရန်</th></tr></thead>
			<tbody>
				<?php
					$num=1;
					foreach ($data as $key => $result)//echo $data['name'];
					{
						echo "<tr class='".$result['dbId']."'><td>".$num."</td><td>".$result['newsTitle']."</td><td><div class='akm'>".nl2br($result['newsBody'])."</div></td><td>".$result['newsTime']."</td><td>";

						$expName=explode(",", $result['newsImages']);
						foreach ($expName as $key => $value)
						{
							echo "<img src='uploadImg/".$result['postTime'].$value."' style='width:50px;height:50px;'>";
						}

						echo "</td><td style='text-align:center;'><a href='index.php?operation=toupdate&dbId=".$result['dbId']."'><span class='newsEdit'><i class='fas fa-edit'></i></span></a></td><td><span class='newsDelete'><i class='far fa-trash-alt'></i></span><input type='hidden' value='".$result['dbId']."'></td></tr>";
						$num++;	
					}
				?>
			</tbody>
		</table>
	</div>

<?php include 'view/footer.php';?>