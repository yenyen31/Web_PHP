<!-- 응용 switch, if문

- 폼: POST 사용
- 사용자가 입력한 2개 숫자에 대한 연산 -->

<!DOCTYPE html>
<html lang="ko">

<body>
    <!-- 사용자로부터 두 개의 숫자와 연산자를 입력받는 폼 -->
    <form method="POST" action="">
        <label for="num1">첫 번째 숫자:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">두 번째 숫자:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <label for="operator">연산자:</label>
        <select id="operator" name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="계산">
    </form>

    <?php
    // 폼이 제출되었을 때 POST 방식으로 데이터가 전송되었는지 확인
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 입력받은 두 숫자를 실수형으로 변환하여 변수에 저장
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $operator = $_POST["operator"]; // 선택한 연산자 저장
        $result = 0; // 결과를 저장할 변수 초기화

        // switch문을 사용해 선택된 연산자에 따라 연산 수행
        switch ($operator) {
            case "+":
                $result = $num1 + $num2; // 덧셈
                break;
            case "-":
                $result = $num1 - $num2; // 뺄셈
                break;
            case "*":
                $result = $num1 * $num2; // 곱셈
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2; // 나눗셈
                } else {
                    // 0으로 나누는 경우 예외 처리
                    echo "0으로 나눌 수 없습니다.";
                    exit;
                }
                break;
            default:
                // 유효하지 않은 연산자 선택 시 처리 
                echo "유효한 연산자를 선택하세요.";
                exit;
        }
    }
    /*
        // 연산 결과 출력
        echo "<p>결과: $num1 $operator $num2 = $result</p>";

        // 추가 연산을 할지 묻는 부분
        do {
            echo '<form method="POST" action="">
                <label for="continue">계속 연산하시겠습니까? (y/n):</label>
                <input type="text" id="continue" name="continue" maxlength="1" required>
                <input type="submit" value="결정">
            </form>';

            // 사용자가 계속 연산할지 선택 ('y'를 입력하면 다시 입력받기)
            if (isset($_POST["continue"]) && $_POST["continue"] === 'y') {
                // 추가 연산자를 위한 새로운 폼 제공
                echo '<form method="POST" action="">
                    <label for="num1">첫 번째 숫자:</label>
                    <input type="number" id="num1" name="num1" required>
                    <br>
                    <label for="num2">두 번째 숫자:</label>
                    <input type="number" id="num2" name="num2" required>
                    <br>
                    <label for="operator">연산자:</label>
                    <select id="operator" name="operator">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input type="submit" value="계산">
                </form>';
                // 이 부분에 추가 연산 로직을 추가 가능
            } else {
                // 연산 종료 메시지
                echo "연산을 종료합니다.";
                break;
            }
        } while (true); // 사용자가 'n'을 입력할 때까지 반복
    }*/
    ?>
</body>

</html>