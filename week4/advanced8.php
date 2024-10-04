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
            <option value="@">+</option>
            <option value="*">-</option>
            <option value="$">*</option>
            <option value="%">/</option>
        </select>
        <input type="submit" value="계산">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = floatval($_POST["num1"]); // 입력받은 첫 번째 숫자를 정수로 변환하여 저장
        $num2 = floatval($_POST["num2"]); // 입력받은 두 번째 숫자를 정수로 변환하여 저장
        $operator = $_POST["operator"];   // 연산자 저장

        // switch문을 사용해 사칙연산 수행
        switch ($operator) {
            case "@":
              echo $operator * num1;
                break;
            case "*":
                break;
            case "$":
                break;
            case "%":
                break;
            default:
                exit;
        }

        echo "<p>" . str_repeat($operator * $num, $num2) . "</p>";

      }
    ?>
</body>
</html>

