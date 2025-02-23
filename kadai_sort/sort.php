<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP KADAI_SORT</title>
</head>
<body>

<p>
        <?php
        // ここにコードを書いていく

        function sort_2way($array, $order) {
            if ($order) { // 昇順ソート
                sort($array);
            } else { // 降順ソート
                rsort($array);
            }
            //return $array;
            foreach($array as $element){
                echo $element."<br>\n";
            }
        }
        
        $nums = [15, 4, 18, 23, 10];

        echo "昇順ソート:<br>\n";
        //$test=sort_2way($nums, true);
        
        sort_2way($nums, true);
        
        echo "\n降順ソート:<br>\n";
        sort_2way($nums, false);
                 
        ?>
</p>
</body>

</html>