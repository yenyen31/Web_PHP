<!-- 응용 for문 
 

-->
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