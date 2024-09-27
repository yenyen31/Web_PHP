<!-- 응용 for문 
- form: POST 사용, for사용
- 사용자가 입력한 수의 팩토리얼을 구하는 프로그램
-->

<form method="POST" action="">
    <input type="number" name="num"  required>
    <input type="submit" value="확인">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $num = intval($_POST["num"]);

        $factorial = 1; // 팩토리얼 값을 저장할 변수 초기화 

        // for문을 사용해 1부터 입력된 수까지 반복하며 팩토리얼 계산
        for ($i = 1; $i <= $num; $i++) 
        {
            $factorial *= $i; // $factorial에 현재 $i 값을 곱해서 팩토리얼 계산
        }
        // 출력
        echo "팩토리얼: " . $factorial;
    }
?>