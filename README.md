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

# KIEN THUC

-   Trong blade engine `asset()` se tu tro toi public folder
