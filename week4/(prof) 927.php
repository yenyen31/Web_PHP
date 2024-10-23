<!-- <?php
$num = 1;
while ($num <= 10) {
    echo $num . " ";
    $num++;
}
?> -->

<!-- <?php
$i = 1;
while ($i <= 100) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
    $i++;
}
?> -->

<!-- <?php
$i = 1;
$sum = 0;
while ($i <= 100) {
    $sum += $i;
    $i++;
}
echo "합계: " . $sum;
?> -->


<!-- <?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
?> -->

<!-- <?php
for ($i = 1; $i <= 100; $i += 2) {
    echo $i . " ";
}
?> -->


<!-- <?php
for ($i = 1; $i <= 9; $i++) {
    echo "7 * $i = " . (7 * $i) . "\n";
}
?> -->


<!-- <?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0) {
        echo $i . " ";
    }
}
?> -->


<!-- <?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo "*";
    }
    echo "<br>";
}
?> -->

<!-- <?php
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo "$i * $j = " . ($i * $j) . "\n";
    }
    echo "<br>";
}
?> -->


<!-- <?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k < (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?> -->


<!-- <?php
$sum = 0;
$i = 1;
do {
    $sum += $i;
    $i++;
} while ($i <= 100);
echo "합계: $sum";
?> -->


<!-- <?php
$i = 1;
do {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
    $i++;
} while ($i <= 50);
?> -->


<!-- <form method="POST" action="">
    <input type="number" name="num"  required>
    <input type="submit" value="확인">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $num = intval($_POST["num"]);   
        $i = 1;
        while ($i <= $num) 
        {
            echo $i . " ";
            $i++;
        }
    }
?> -->


<!-- <form method="POST" action="">
    <input type="number" name="num"  required>
    <input type="submit" value="확인">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $num = intval($_POST["num"]); 
        $factorial = 1;
        for ($i = 1; $i <= $num; $i++) 
        {
            $factorial *= $i;
        }
        echo "팩토리얼: " . $factorial;
    }
?> -->


<!-- <form method="POST" action="">
    <input type="number" name="num"  required>
    <input type="submit" value="확인">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $dan = intval($_POST["num"]); 
        
        //echo "<p>$dan 단 출력 결과:</p>";

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
                for ($i = 1; $i <= 9; $i++) {
                    echo "$dan * $i = " . ($dan * $i) . "<br>";
                }
                break;
            default:
                echo "2에서 9 사이의 숫자를 입력하세요.";
        }
    }
?> -->

<!-- 
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
        $num1 = floatval($_POST["num1"]);
        $num2 = floatval($_POST["num2"]);
        $operator = $_POST["operator"];
        $result = 0;

        // switch문을 사용해 사칙연산 수행
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
 -->


<!-- 
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $num1 = intval($_POST["num1"]);
        $num2 = intval($_POST["num2"]);
        $operator = $_POST["operator"];
        $result = 0;

        // switch문을 사용해 사칙연산 수행
        switch ($operator) 
        {
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
                if ($num2 != 0) 
                {
                    $result = $num1 / $num2;
                } 
                else 
                {
                    echo "0으로 나눌 수 없습니다.";
                    exit;
                }
                break;
            default:
                echo "유효한 연산자를 선택하세요.";
                exit;
        }

        echo "<p>결과: $num1 $operator $num2 = $result</p>";
    }
?>
  -->




