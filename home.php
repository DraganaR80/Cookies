<?php 
//superglobalna COOKIE
if(isset($_COOKIE['username'])){

    echo 'Logovan je korisnik sa username-om:'.$_COOKIE['username'];
}
else {

    echo 'nema kolacica.';
}
 //samostalno postavlajnje
setcookie('korisnik', 'Dragana', time() + 60*60*24);
//brisanje cookie
//setcookie('korisnik', 'Dragana', time() -1);

if(count($_COOKIE)>0){

    echo "trenutno postoji:".count($_COOKIE). "sacuvanih kolacica";

} else {

    echo " Nema sacuvanih kolacica";
}
$user = ["ime"=> "Sreten",
"email" => "sertem@gmail.com",
"godine" => 23];

//setcookie('user', $user, time()+3600);  ne moye ceo niy
//serijalizacija
$userSerijalizovan = serialize($user);
setcookie("user", $userSerijalizovan, time() +3600);

$userCookie = $_COOKIE['user'];
echo '<br>' . $userCookie;

//Deserijalizacija- kada pokusavamo da pristupimo podacima iy kolacica

$userdeserijalizovan = unserialize($_COOKIE['user']);
echo"<br>Deserijalizovani podaci:" . $userdeserijalizovan['ime']. "<br>";

print_r($userdeserijalizovan);
?>