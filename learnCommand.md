# Belajar Command laravel  
## Membuat model
```bash
composer artisan make:model NamaModel -m 
```
## Membuat Database migration 
```bash
composer artisan make:migration NamaTabelMigration 
```
# Belajar Command filament  
## Membuat resource page
```bash
php artisan make:filament-resource NamaResource 
```
membuat resource dengan generate agar langsung sesuai dengan form dan kolom pada database
```bash
php artisan make:filament-resource NamaResource --generate 
```
## Membuat Page record 
record /{id}/pasien id = record 
--type=ViewRecord
--type=EditRecord
--type=CreateRecord
--type=ListRecord
```bash
php artisan make:filament-page ViewPatient --resource=NamaResource --type=ViewRecord
```
## Membuat Database migration 
```bash
composer artisan make:migration NamaTabelMigration 
```
## Membuat Stats untuk chart
```bash
php artisan make:filament-widget Stats
```

# Belajar table laravel
## Melakukan relasi ke tabel user   
```php
    $this->hasOne('User'); 
```
## Melakukan akses ke tabel user   
```php
    $this->belongsTo('User'); 
```
## Melakukan relasi ke banyak tabel    
```php
    $this->hasMany('User'); 
```
## Melakukan akses ke banyak tabel    
```php
    $this->belongsTo('User'); 
```

