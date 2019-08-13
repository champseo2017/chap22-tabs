<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Example 22-2</title>
<style>
	* {
		font: 18px tahoma;
	}
 </style>
<link href="js/jquery-ui.min.css" rel="stylesheet">
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.blockUI.js"></script>

</head>
<body>
<div id="tabs">
	<ul>
		<li><a href="#tab1">รายละเอียด</a></li>
		<li><a href="#tab2">ภาพแกลเลอรี่</a></li>
	</ul>
	<div id="tab1"></div>
	<div id="tab2"></div>
</div>

<script>
	$(function(){
		$('#tabs').tabs(); //สร้างแท็บ
		$('#tabs a').click(function(event){ //เมื่อคลิกที่แท็บซึ้งสร้างจากแท็ก <a>
			var t = $(this).attr('href'); // แอตทริบิวต์ href เป็นตัวบ่งชี้ว่าเป็นแท็บใด
			t = t.replace('#', ''); // เอาเครื่องหมายออกจากแอตทริบวต์ href ที่อ่านได้
			$.ajax({
				url:'tabs.php',
				data:{'tab':t},
				type:'get',
				cache:false,
				beforeSend:function(){ // ทำ overlay และ แสดง indicator
					$('#tabs').block({
						message:'<h3><img src="load.gif">Loading...</h3>'
					});
				},
				success:function(result){ // นำผลลัพธ์ไปกำหนดเป็นเนื้อหาของแท๊บที่ถูกเลือก
				$('#' + t).html(result);
				},
				complete:function(){ // ยกเลิก overlay และ indicator
					$('#tabs').unblock();
				}
			});
		});
		$('#tabs a:first').click(); // เมื่อโหลดเพจ ทำให้เกิดอีเวนต์ click กับแท็บแรกโดยอัตโนมัติ
	});
</script>
</body>
</html>
