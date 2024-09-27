<!-- 응용 switch, if문

- 폼: POST 사용
- 사용자가 입력한 2개 숫자에 대한 연산 -->

<!DOCTYPE html>
<html lang="ko">
<body>
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST["num1"]); // 입력받은 첫 번째 숫자를 정수로 변환하여 저장
        $num2 = floatval($_POST["num2"]); // 입력받은 두 번째 숫자를 정수로 변환하여 저장
        $operator = $_POST["operator"]; // 연산자 저장
        $result = 0; // 연산 결과 저장할 변수

        // switch문을 사용해 사칙연산 수행
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
                    echo "0으로 나눌 수 없습니다.";
                    exit;
                }
                break;
            default:
                echo "유효한 연산자를 선택하세요.";
                exit;
        }

        echo "<p>결과: $num1 $operator $num2 = $result</p>";

        // 추가 연산을 할지 묻는 부분
        do {
            echo '<form method="POST" action="">
                <label for="continue">계속 연산하시겠습니까? (y/n):</label>
                <input type="text" id="continue" name="continue" maxlength="1" required>
                <input type="submit" value="결정">
            </form>';
            
            if (isset($_POST["continue"]) && $_POST["continue"] === 'y') {
                // 다시 입력받아 추가 연산 진행
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
                // 이 부분은 추가 연산 로직을 포함해도 됨.
            } else {
                echo "연산을 종료합니다.";
                break;
            }
        } while (true);
    }
    ?>
</body>
</html>

