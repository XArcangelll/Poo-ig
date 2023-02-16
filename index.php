<?php

require 'vendor/autoload.php';
use Diego\Poo\modelos\Post;
use Diego\Poo\modelos\ImagePost;
use Diego\Poo\modelos\User;
use Diego\Poo\modelos\VideoPost;




/*$miobjeto = new Post("mensajitoo");

echo $miobjeto->getId();
echo "\n";
echo $miobjeto->getMensaje();
echo "\n";

$miobjeto2 = new ImagePost("mensaje imagen","imagen");

echo $miobjeto2->getMensaje();*/

$diego = new User("Diego","arcangel","arcangel@hotmail.com","123");
/*$nilou = new User("nilou","nilousita","nilou@hotmail.com","123");
$ladybug = new User("ladybug","miraculous","ladybug@hotmail.com","123");
$hana = new User("hana","hanasita","hana@hotmail.com","123");*/

$diegoPost = new ImagePost("aqui con mi madagascar","mada.jpg");
$diegoPost2 = new ImagePost("aqui con mi madagascar 2","mada2.jpg");
/*$nilouPost = new VideoPost("aqui con bailando","nilou.mov");
$ladybugPost = new VideoPost("aqui con miraculous","ladyg.mov");
$hanaPost = new ImagePost("aqui con mi dieguito","amor.jpg");*/

$diego->publish($diegoPost);
$diego->publish($diegoPost2);
/*$nilou->publish($nilouPost);
$ladybug->publish($ladybugPost);
$hana->publish($hanaPost);

$diegoPost->addLike($ladybug);
$diegoPost->addLike($nilou);

$nilouPost->addLike($diego);
$nilouPost->addLike($nilou);
$nilouPost->addLike($ladybug);
$nilouPost->addLike($hana);

$hanaPost->addLike($hana);
$hanaPost->addLike($ladybug);

$diego->addFollower($hana);
$diego->addFollower($nilou);

$hana->addFollower($diego);
$hana->addFollower($nilou);

$nilou->addFollower($diego);
$nilou->addFollower($ladybug);
$nilou->addFollower($hana);
$ladybug->addFollower($hana);
*/






print_r($diego->showPosts());

