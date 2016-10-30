<?php
header("content-type:image/PNG");
$re = imagecreatetruecolor(500,600);

$red = imagecolorallocatealpha($re,255,0,0,75);
$white = imagecolorallocate($re,255,255,255);
$black = imagecolorallocatealpha($re,0,0,0,75);
$green = imagecolorallocatealpha($re,0,255,0,75);

imagefill($re,0,0,$red);
//画一个圆（要填充色绿，边线色黑）
// imageellipse($re,250,300,200,200,$black);
// imagefill($re,250,300,$green);

for ($i=0; $i < 500; $i++) { 
	imagesetpixel($re,mt_rand(0,500),mt_rand(0,600),$white);
}

for ($i=0; $i < 4; $i++) { 
	$x1 = 0;
	$y1 = mt_rand(0,600);
	$x2 = 500;
	$y2 = mt_rand(0,500);
	$colorRand = imagecolorallocate($re,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	imageline($re,$x1,$y1,$x2,$y2,$colorRand);
}
//画一个圆（不要填充色）
//imageellipse($re,250,300,200,200,$black);
//画一个圆（要填充色）
imagefilledellipse($re,250,300,200,200,$black);

//画圆弧 style 1 三角形 2 圆弧 3 起始点到结束点的线 4 有填充的扇形
imagefilledarc($re,200,100,100,200,90,360,$black,4);


imagepng($re);