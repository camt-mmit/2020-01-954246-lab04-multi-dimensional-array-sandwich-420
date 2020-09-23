<?php
/*ID: 602110199
Name: Cai Anmin(Sandwich)
Wechat: Sandwcih*/
printf("Input size (n >= 1):");
fscanf(STDIN, "%d", $n);
for($i=$n;$i>0;$i--){
    for($j=$n;$j>0;$j--){
        if($i==$n||$j==$n){
            $arr[$i][$j]=1;
        }elseif($i+$j<$n+1){
            $arr[$i][$j]=" ";
        }else{
            $arr[$i][$j]=$arr[$i+1][$j]+$arr[$i][$j+1];
        }echo $arr[$i][$j]."\t";
    }echo "\n";
}
?>