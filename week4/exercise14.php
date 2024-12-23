<!-- 응용6: switch + if문
- 폼: POST 사용
- 인치 ↔ 센티미터
- 섭시 ↔ 화씨     
-->

<!DOCTYPE html>
<html lang="ko">

<body>
    <!-- 사용자로부터 변환할 값을 입력받는 폼 -->
    <form method="POST" action="">
        <label for="num">변환할 값을 입력하세요:</label>
        <input type="number" step="any" id="num" name="num" required> <!-- 소수점까지 입력 가능 -->
        <br>

        <label for="conversion">변환 방식:</label>
        <select id="conversion" name="conversion">
            <option value="inch_to_cm">인치 → 센티미터</option> <!-- 인치를 센티미터로 변환 -->
            <option value="cm_to_inch">센티미터 → 인치</option> <!-- 센티미터를 인치로 변환 -->
            <option value="f_to_c">화씨 → 섭씨</option> <!-- 화씨를 섭씨로 변환 -->
            <option value="c_to_f">섭씨 → 화씨</option> <!-- 섭씨를 화씨로 변환 -->
        </select>
        <input type="submit" value="변환"> <!-- 변환 버튼 -->
    </form>

    <?php
    // 폼이 제출되었을 때 POST 방식으로 처리
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = floatval($_POST["num"]);     // 입력 값을 소수점까지 받을 수 있도록 floatval() 사용
        $conversion = $_POST["conversion"]; // 사용자가 선택한 변환 방식
        $result = 0;  // 결과 값을 저장할 변수 초기화

        // 선택한 변환 방식에 따른 처리
        switch ($conversion) {
            case "inch_to_cm":
                $result = $num * 2.54;  // 인치를 센티미터로 변환
                echo "<p>결과: $num 인치 = $result 센티미터</p>";
                break;
            case "cm_to_inch":
                $result = $num / 2.54;  // 센티미터를 인치로 변환
                echo "<p>결과: $num 센티미터 = $result 인치</p>";
                break;
            case "f_to_c":
                $result = ($num - 32) * 5 / 9;  // 화씨를 섭씨로 변환
                echo "<p>결과: $num 화씨 = $result 섭씨</p>";
                break;
            case "c_to_f":
                $result = ($num * 9 / 5) + 32;  // 섭씨를 화씨로 변환
                echo "<p>결과: $num 섭씨 = $result 화씨</p>";
                break;
            default:
                // 잘못된
                echo "유효한 변환 방식을 선택하세요.";
                exit;
        }
    }
    ?>

</body>

</html>