<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer


/**
 * Bu ödevde bazal metabolizma hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük BMR ihtiyacını hesaplayıp
 * bunu ekrana yazan ve tahmin değeri ile karşılaştıran
 * PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 88.362 + (13.397 x kilo) + (4.799 x boy) – (5.677 x yaş)
 * Kadınlar için; 447.593 + (9.247 x kilo) + (3.098 x boy) – (4.330 x yaş)
 * 
 * Tahmin değeri ile karşılaştırmanızın sonucunda
 * "Tahmin değerinden düşük", "Tahmin değerinden büyük" veya
 * "Tahmin değerine eşit" şeklinde çıktı vermeniz gerekiyor.
 * 
 * Örneğin;
 * $gender = "female";
 * $weight = 60;
 * $height = 170;
 * $age = 30;
 * 
 * Ekrana
 * 
 * BMR: 1399.173
 * Tahmin değerinden düşük
 * 
 * yazması gerekiyor.
 */

 // Coefficients was defined.
const ManFactor = 88.362;
const WomanFactor = 447.593;
const ManWeightFactor = 13.397;
const WomanWeightFactor = 9.247;
const ManHeightFactor = 4.799;
const WomanHeightFactor = 3.098;
const ManAgeFactor = 5.677;
const WomanAgeFactor = 4.330;

// Gender Decision Section
if($gender=="male")
{
$bmr = ManFactor + ManWeightFactor*$weight + ManHeightFactor*$height - ManAgeFactor*$age;
}
else
{
$bmr = WomanFactor + WomanWeightFactor*$weight + WomanHeightFactor*$height - WomanAgeFactor*$age;
}

echo "BMR: $bmr " . "<br>" ; 

//BMR and guess Compare Section
if($guess>$bmr)
{
echo "Tahmin değerinden düşük";
}
else if($guess==$bmr)
{
echo "Tahmin değerine eşit";
}
else
{
echo "Tahmin değerinden büyük";
}
