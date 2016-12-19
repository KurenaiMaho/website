<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Meine erste Homepage</title>
</head>
<body>
<?php
$AP=790;
$CritR=7296;
$Durch=1006;
$CritD=2313;
$SkillAMP=16.95733333333;
$ZDMG=32;
$BossD=15;
$EleD=0;
$LegP=5;
$SSCD=15;

$wert= $AP - $ZDMG;
If ($BossD>=(94.9*$Durch)/(4707+$Durch))
{
    $wert2=($AP*$SkillAMP+(100+($EleD/(24.722+0.003421*$EleD)))/100+$ZDMG)*$LegP/100+($AP*$SkillAMP+(100+($EleD/(24.722+0.003421*$EleD)))/100+$ZDMG)*(1-$BossD/100+((94.9*$Durch)/(4707+$Durch))/100)*(125+(291*$CritD)/(4315+$CritD)+$SSCD)/100*((97*$CritR)/(3578+$CritR))/100+($AP*$SkillAMP+(100+($EleD/(24.722+0.003421*$EleD)))/100+$ZDMG)*$LegP/100+($AP*$SkillAMP+(100+($EleD/(24.722+0.003421*$EleD)))/100+$ZDMG)*(1-$BossD/100+((94.9*$Durch)/(4707+$Durch))/100)*(1-((97*$CritR)/(3578+$CritR))/100);
}
else {
    $wert2=(($AP*$SkillAMP*(100+($EleD/(24.722+0.003421*$EleD)))/100+$ZDMG)*$LegP/100+($AP*$SkillAMP*(100+($EleD/(24.722+0.003421*$EleD)))/100+$ZDMG)*(1-$BossD/100+$BossD/100)*(125+(291*$CritD)/(4315+$CritD)+$SSCD)/100*((97*$CritR)/(3578+$CritR))/100+($AP*$SkillAMP*(100+($EleD/(24.722+0.003421*$EleD)))/100+$ZDMG)*$LegP/100+($AP*$SkillAMP*(100+($EleD/(24.722+0.003421*$EleD)))/100+$ZDMG)*(1-$BossD/100+$BossD/100)*(1-((97*$CritR)/(3578+$CritR))/100));
}

    echo "$wert2 <br>";



?>
</body>
</html>
