<!-- 응용 switch, for문 
- form: POST 사용,switch, for사용
- 사용자가 입력한 숫자에 따라 해당 구구단을 출력 
-->

<form method="POST" action="">
    <input type="number" name="num"  required>
    <input type="submit" value="확인">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $dan = intval($_POST["num"]); 
        
        //echo "<p>$dan 단 출력 결과:</p>";

        // 구구단은 2단부터 9단까지
        switch ($dan) 
        {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
                // 구구단 출력
                for ($i = 1; $i <= 9; $i++) {
                    // 예: 2 * 1 = 2, 2 * 2 = 4... 과 같은 형식으로 출력
                    echo "$dan * $i = " . ($dan * $i) . "<br>";
                }
                break;
            default:
                // 입력한 숫자가 2에서 9 사이가 아닐 때 메시지 출력
                echo "2에서 9 사이의 숫자를 입력하세요.";
        }
    }
?>
