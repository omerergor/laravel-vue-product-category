<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel + Vue Product Category Management Example

This project is for example not commercial.


## Db Seeder Using for Example Data

<b>Product Data</b><br>
php artisan db:seed --class=ProductSeeder

<b>Category Data</b><br>
php artisan db:seed --class=CategorySeeder

## Category Api Example Routes

<b>Get - List</b><br>
http://ahsansarfraz.test/api/categories
<br>

<b>Get - Show for id:1</b><br>
http://ahsansarfraz.test/api/categories/1
<br>

<b>Post - Add Category</b><br>
http://ahsansarfraz.test/api/categories
<br>
<b>Json Data:</b><br>
{
"name":"test15",
"photo":"..."
}
<br><b>*name</b> required.
<br>

<b>Update - Category for id:1</b><br>
http://ahsansarfraz.test/api/categories/1
<br>
<b>Json Data:</b><br>
{
"name":"test15",
"photo":"..."
}

<b>Delete - Category for id:1</b><br>
http://ahsansarfraz.test/api/categories/1


## Product Api Example Routes

<b>Get - List</b><br>
http://ahsansarfraz.test/api/products

<b>Get - Show for id:1</b><br>
http://ahsansarfraz.test/api/products/1
