
<!-- 
Verilen dizideki boş elemanları temizleyerek belirtilen adette rastgele değerlerden 
dizi oluşturan bir fonksiyon yazın.
(array_map(), array_filter() ve array_rand() fonksiyonlarını kullanarak.)

örnek
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 3));
print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 4));
print_r(sizinFonksiyonunuz($planets, 5));

Ekran Çıktısı;
Array
(
    [0] => Venus
    [1] => Mars
)
Array
(
    [0] => Earth
    [1] => Jupiter
    [2] => Uranus
)
Array
(
    [0] => Mars
    [1] => Uranus
)
Array
(
    [0] => Venus
    [1] => Earth
    [2] => Jupiter
    [3] => Neptune
)
Array
(
    [0] => Mercury
    [1] => Earth
    [2] => Saturn
    [3] => Uranus
    [4] => Neptune
)
-->
<?php

// echo "<pre>";
// $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
// print_r($planets);

// //todo BOŞ ELEMANLARI ÇIKARMANIN İLK FORMÜLÜ
// array_pop($planets);
// print_r($planets);

// array_pop($planets);
// array_pop($planets);
// print_r($planets);


// $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

// //todo BOŞ ELEMANLARI DİZİDEN ÇIKARMANIN İKİNCİ VEDE BOŞLARIN DİZİNİN SONUNDA BULUNMASINDAN DOLAYI DAHA BASİT YOLDUR
// $newPlanets = array_slice($planets,0,7);
// print_r($newPlanets);


echo "<pre>";
$planets = ["mercury", "venus", "earth","mars","jupiter","saturn","uranus","neptune","","", NULL];
$mapped_arr = array_map(function($e){ 
    global $planets;
    if($e == ""){
       return NULL;}
    else{
        return $e;}
    }, $planets);
    $filtered_arr = array_filter($mapped_arr, function($e){
        return $e != NULL ? $e : false;
    });
    
