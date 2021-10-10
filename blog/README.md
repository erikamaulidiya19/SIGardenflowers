# Sistem Informasi Gardenia Florist

<h3>
Nama : ERIKA MAULIDIYA <br>
NIM  : 1810817220017
</h3>
<p align="center">
    <img src="blog/public/asset/images/gf.png" width="1280" title="Sistem Informasi Gardenia Florist"/>
</p>

## Information

`Sistem Informasi Gardenia Florist` Merupakan sistem informasi yang berisikan informasi data bunga, kue, dan caffe
<br> diwilayah Kalimantan Selatan khususnya di Banjarmasin 
memiliki 3 halaman, yaitu:
- Landing Page
- Dasboard User
- Dasboard Admin (Tabel Data Bunga)

## Requirements

- Laravel 8
- PHP 8.0.6
- Bootstrap 4/5

## Installation
1. Clone Repo gitHub
```bash
https://github.com/erikamaulidiya19/SIGardenflowers.git
```
2. Instal dependensi PHP dengan `composer install`
3. Instal Laravel melalui composer (instal local)
```bash
composer create-project laravel/laravel example-app
```
4. Buka Project yang sudah diclone di Tools `Visual Studi Code` dengan `Open Folder` 
5. siapkan database, masukan nama database kosong yang telah disediakan
6. copy .env example menjadi .env

7. generate key app laravel pada terminal

```bash
php artisan key:generate
```
8. migrate pada terminal
```bash
php artisan migrate
```
9. run seeder
```bash
php artisan db:seeder
```
10. menjalankan situs web secara lokal
```bash
php artisan serve
```
