<?php
    $activePlayer=0;
    //0 player neg
    //1 player 2
    $score=array(0,0);
    $win=50;
    $won=0;
    while($won<50){
    $random = rand(1,6);
    echo "Shoo". $random."<BR>";
    if($random >1){
        $act=$activePlayer+1;
        $score[$activePlayer]=$score[$activePlayer]+ $random;
        echo $act. "r toglogchin ono: ".$score[$activePlayer]. '<BR>';
        $won=$score[$activePlayer];
    }else{echo "Soligdloo"."<BR>";
        if($activePlayer===0){
        $activePlayer =1;
        }else{
        $activePlayer =0;
        }
    }
    }
    echo $act."-r toglogch hojloo";
    //1 buwal eljin soligd
    //50 ono hurwel hojn
    ?>