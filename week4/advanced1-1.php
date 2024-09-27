<!-- 응용 while문 
- form: POST 사용, while 사용
- 사용자로부터 입력받은 숫자끼리 1씩 증가하면서 출력하는 코드 -->

<!-- 사용자가 숫자를 입력할 수 있는 폼 -->
<form method="POST" action="">
    <input type="number" name="num"  required>  <!-- 사용자로부터 숫자를 입력받는 필드 (required: 입력 필수) -->
    <input type="submit" value="확인"> <!-- 제출 버튼 -->
</form>

<?php
    // 사용자가 폼을 제출했는지 확인
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {   
        // POST 요청으로 전송된 입력 값을 받아서 정수로 변환 (intval 사용)
        $num = intval($_POST["num"]);   
        $i = 1; // 초기 변수 설정 (i는 1부터 시작)
        while ($i <= $num) 
        {
            echo $i . " ";
            $i++;
        }
    }
?>