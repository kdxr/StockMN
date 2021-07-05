<?php 

require_once('../function/kdxr_function.php');
$functions = new kdxr_function();


$type = $_REQUEST['type'];
?>

<style>


th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3f4240;
  color: white;
  font-weight: bold;
  font-size: 1.3em;
}

td{
	border: 1px solid #ddd;
	border-collapse: collapse;
	margin: 10px;
	font-size: 17px;
}

table{
	border: 1px solid #ddd;
	padding: 0 0;
}

</style>

<?php
	if($type === 'herbal')
	{
?>
	<h1 style="text-align:center;">รายงานยอดคงเหลือสต็อกใน วันที่ <?php echo $functions->thai_date(strtotime(date('Y-m-d')));?></h1>
	<h3 style="text-align:center;">ยาสมุนไพร</h3>
	<table>
	<thead>
	  <tr>
		<th style="width:5%;text-align: center;"></th>
		<th style="width:55%;text-align: center;"><b>ชื่อยาสมุนไพร</b></th>
		<th style="width:15%;text-align: right;">จำนวน</th>
		<th style="width:25%;text-align: center;">หน่วยนับ</th>
	  </tr>
	</thead>
	<tbody>
		<?php
			$result_list = $functions->getViewCheckStockHerbal_ForReport();
			foreach ($result_list['result'] as $key => $row) 
			{
		?>
		<tr nobr="true">
			<td style="width:5%;text-align: center;">
				<?php echo ++$key;?>
			</td>
			<td style="width:55%;text-align: center;">
				<?php echo $row['Name'] ?>
			</td>
			<td style="width:15%;text-align: right;">
				<?php 
					echo max(0,$row['value_sum']); 
				?>
			</td>
			<td style="width:25%;text-align: center;">
				<?php 
					echo $row['counting_name']; 
				?>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
	</table>
<?php
	}else{
?>
	<h3 style="text-align:center;">เวชภัณฑ์</h3>
	<table>
	<thead>
	   <tr>
		<th style="width:5%;text-align: center;"></th>
		<th style="width:55%;text-align: center;"><b>ชื่อยาสมุนไพร</b></th>
		<th style="width:15%;text-align: right;">จำนวน</th>
		<th style="width:25%;text-align: center;">หน่วยนับ</th>
	  </tr>
	</thead>
	<tbody>
		<?php
			$result_list = $functions->getViewCheckStockMedical_ForReport();
			foreach ($result_list['result'] as $key => $row) 
			{
		?>
		<tr nobr="true">
			<td style="width:5%;text-align: center;">
				<?php echo ++$key;?>
			</td>
			<td style="width:55%;text-align: center;">
				<?php echo $row['Name'] ?>
			</td>
			<td style="width:15%;text-align: right;">
				<?php 
					echo max(0,$row['value_sum']); 
				?>
			</td>
			<td style="width:25%;text-align: center;">
				<?php 
					echo $row['counting_name']; 
				?>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
	</table>
<?php
	}
?>