# CLONE LARAVEL-MUSIC-PRACTICING

2024.03.18

# STEP

## 1. MAKE MIGRATION/MODEL

### a. Make file

-   `php artisan make:migration create_tacgia_table`
-   `php artisan make:migration create_theloai_table`
-   `php artisan make:migration create_baiviet_table`

### b. Edit content & run migrate

### c. Make model: bz different name:

    - do khac ten giua model va migration nen can tao rieng
    - dung `php artisan make:model Category; php artisan make:model Author; php artisan make:model Article`;

### d. Make fake data

    - run `php artisan make:seeder CategoryTableSeeder; php artisan make:seeder AuthorTableSeeder; php artisan make:seeder ArticleTableSeeder`
    - cap nhat noi dung SeederTable tuong ung voi noi dung can sinh auto;
    - chay Seeder: `php artisan db:seed --class=CategoryTableSeeder`

## 2. LAYOUT

-   Tao folder `layouts`
-   Tao cac file tuong ung voi viec su dung
-   Sua file `web.php` trong routes folder
-   config su dung layout:
    -   tai file view `home.blade.php` config su dung layout `base`
    -   trong moi file layout khac nhau, tien hanh config thanh phan su dung tinh va dong;
    -   Noi su dung noi dung dong se co `@yield`

## 3. CONTROLLER

-   run `php artisan make:controller HomeController, ArticleController`

# KIEN THUC

-   Trong blade engine `asset()` se tu tro toi public folder
-   Su dung layout: web.php -> home.blade.php; folder: layout -> file footer, header, base
-   tu routes/endpoint -> goi toi controller tuong ung -> action tuong ung -> view tuong ung
-   `Route::resource` tu bat action theo phuong thuc co san
