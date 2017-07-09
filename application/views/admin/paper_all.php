<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>สินค้าทั้งหมด</title>
</head>
<style>
body {
	background: rgb(204,204,204);
}
page {
	background: white;
	display: block;
	padding: 2%;
	margin: 0 auto;
	margin-bottom: 0.5cm;
	box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {
	width: 21cm;
	height: 29.7cm;
}
page[size="A4"][layout="portrait"] {
	width: 29.7cm;
	height: 21cm;
}
page[size="A3"] {
	width: 29.7cm;
	height: 42cm;
}
page[size="A3"][layout="portrait"] {
	width: 42cm;
	height: 29.7cm;
}
page[size="A5"] {
	width: 14.8cm;
	height: 100%;
}
page[size="A5"][layout="portrait"] {
	width: 21cm;
	height: 100%;
}
@media print {
body, page {
	margin: 0;
	box-shadow: 0;
}
}
hr.style-two {
	border: 0;
	height: 1px;
	background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
</style>

<?php
$month =  array(
	'01' => "มกราคม",
	'02' => "กุมภาพันธ์",
	'03' => "มีนาคม",
	'04' => "เมษายน",
	'05' => "พฤษภาคม",
	'06' => "มิถุนายน",
	'07' => "กรกฎาคม",
	'08' => "สิงหาคม",
	'09' => "กันยายน",
	'10' => "ตุลาคม",
	'11' => "พฤศจิกายน",
	'12' => "ธันวาคม",
);
?>

<body>
<!--<page size="A4"></page>
<page size="A4"></page>
<page size="A4" layout="portrait"></page>
<page size="A5"></page>-->
<page size="A5" layout="portrait">
	<table class="table table-hover primary" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th><div align="right">ลำดับ</div></th>
				<th><div align="right">วันที่เพิ่ม</div></th>
				<th><div align="right">เครือข่าย</div></th>
				<th><div align="right">เบอร์</div></th>
				<!-- <th><div align="center">ผลรวม</div></th> -->
				<th><div align="right">ราคาขาย</div></th>
				<th><div align="right">ตัวแทน</div></th>
				<th><div align="right">สถานะ</div></th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; date_default_timezone_set('Asia/Bangkok');?>
			<?php foreach($product as $product){ ?>
					<tr>
				<td align="right"><?php echo $i ?></td>
				<td align="right"><?php echo $product['product_date']?></td>
				<td align="right"><?php echo $product['mobile_network_name']?></td>
				<td align="right"><?php echo substr($product['product_number'],0,-7)?>-<?php echo substr($product['product_number'],3)?></td>
				<!-- <td align="center">[<?php echo $product['Count_number']?>]</td> -->
				<!-- <td align="right"><?php echo number_format($product['product_cost'],2)?> บาท</td> -->
				<td align="right"><?php echo number_format($product['product_sale'],2)?> บาท</td>
				<td align="right"><?php echo $product['agent_name']?></td>

				<?php if ($product['product_status'] == 1): ?>
					<td align="right" style="color:gray;">กำลังขาย</td>
				<?php elseif ($product['product_status'] == 3): ?>
					<td align="right" style="color:orange;">จองแล้ว</td>
				<?php elseif ($product['product_status'] == 4): ?>
					<td align="right" style="color:green;">ขายแล้ว</td>
				<?php else: ?>
					<td align="right" style="color:red;">ยกเลิก</td>
				<?php endif; ?>
			</tr>


			<?php $i++ ?>
			<?php } ?>
		</tbody>
	</table>
  <p>&nbsp;</p>
</page>
<!--<page size="A3"></page>
<page size="A3" layout="portrait"></page>-->
</body>
</html>
