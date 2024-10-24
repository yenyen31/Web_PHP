<!-- 응용 switch, for문 
- form: POST 사용, switch와 for문 사용
- 사용자가 입력한 숫자에 따라 해당 구구단을 출력 -->

<!-- HTML 폼 -->
<form method="POST" action=""> <!-- POST 메서드를 사용해 데이터를 서버로 전송 -->
    <input type="number" name="num" required> <!-- 사용자가 입력할 숫자, 필수 입력 필드 -->
    <input type="submit" value="확인"> <!-- 제출 버튼 -->
</form>

<?php
// 폼 제출 후 POST 방식으로 데이터가 전달되었는지 확인
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 사용자가 입력한 수를 정수로 변환하여 변수 $dan에 저장
    $dan = intval($_POST["num"]);

    // 구구단은 2단부터 9단까지 출력 가능
    switch ($dan) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            // 사용자가 입력한 값이 2~9 사이인 경우 해당 구구단을 출력
            for ($i = 2; $i <= 9; $i++) {
                // 예: 2 * 1 = 2, 2 * 2 = 4... 과 같은 형식으로 출력
                echo "$dan * $i = " . ($dan * $i) . "<br>";
            }
            break;

        default:
            // 입력한 숫자가 2에서 9 사이가 아닐 때 경고 메시지 출력
            echo "2에서 9 사이의 숫자를 입력하세요.";
    }
}
?>