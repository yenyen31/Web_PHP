<form method="POST" action="">
	<input type="number" name="month" min="1" max="12" placeholder="월(1~12)" required>
	<input type="submit" value="확인">
</form>

<?php
	// - POST 폼이 제출 되었는가 판별
	// HTTP 메서드 (GET, POST 등)를 확인촘으로 전달되어진 ‘month’를 _POST[]에 저장하고 $month에 저장
	if($_SERVER["REQUEST_METHOD"]=="POST"){
    $month = $_POST['month'];
    echo "입력한 월: " . $month;
  }
?>