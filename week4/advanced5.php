<!-- 응용5: 응용4 + 최대공약수/최대공배수 추가

- 폼: POST 사용
- 사용자가 입력한 2개 숫자에 대한 연산
- 최대공약수, 최대공배수 추가 -->

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
            <option value="gcd">최대공약수</option> <!-- 최대 공약수 선택 -->
            <option value="lcm">최소공배수</option> <!-- 최대 공배수 선택 -->
        </select>
        <input type="submit" value="계산">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST["num1"]);
        $num2 = intval($_POST["num2"]);
        $operator = $_POST["operator"];
        $result = 0;

        // 최대공약수(GCD)를 구하는 함수 정의: 유클리드 알고리즘 사용
        function gcd($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "0으로 나눌 수 없습니다.";
                    exit;
                }
                break;

            case "gcd": // 최대공약수(GCD) 계산
                $result = gcd($num1, $num2);
                break;
            case "lcm": // 최소공배수(LCM) 계산
                // LCM 계산은 두 수의 곱을 GCD로 나누는 방식으로 구함
                $result = ($num1 * $num2) / gcd($num1, $num2);
                break;
            default:
                echo "유효한 연산자를 선택하세요.";
                exit;
        }

        // 최종 결과 출력
        echo "<p>결과: $num1 $operator $num2 = $result</p>";
    }
?>

