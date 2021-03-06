0.  download and run

    - cd link/namefile
    - composer create-project laravel/laravel namefile
    - php artisan serve

1.  Thiết lập quyền ghi thư mục

    Trong Laravel bạn cần phải cấp quyền ghi cho một số thư mục sau:

        - storage
        - bootstrap/cache

2.  Thiết lập cấu hình cơ bản

    - Tạo Application Key: Nếu bạn cài đặt Laravel từ đầu hệ thống sẽ tự động tạo Application Key,
      trong trường hợp bạn cài đặt source code từ nguồn khác hãy tự tạo Application bằng câu lệnh sau:
      - php artisan key:generate

3.  Thiết lập môi trường

    - Laravel cho phép thiết lập môi trường cho ứng dụng như: Môi trường sản phẩm, phát triển, kiểm thử,…

    - Để thiết lập, bạn vui lòng mở file .env
      - APP_ENV=local
      - APP_DEBUG=true
    - Tại đây bạn có thể thay đổi 2 tham số:

      - APP_ENV: Thiết lập môi trường (local, production, staging,…)
      - APP_DEBUG: Bật tắt chế độ debug

4.  Thiết lập cơ sở dữ liệu

    - Các thiết lập liên quan đến CSDL sẽ được thiết lập trong file .env hoặc config/database.php. Bạn có thể thiết lập kết nối với MySQL, SQLite, SQL Server,…
    - Mặc định sẽ được thiết lập kết nối với MySQL. Bạn có thể thay đổi bằng cách sửa DB_CONNECTION trong file .env:

      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=laravel
      DB_USERNAME=root
      DB_PASSWORD=

5.  Chuyển chế độ hệ thống

    - Để bật chế độ bảo trì hệ thống, bạn chỉ cần chạy lệnh sau ở giao diện dòng lệnh (Command Line):
      - php artisan down
    - Lúc này, tất cả các link trên hệ thống khi truy cập sẽ có giao diện 503:
    - Nếu muốn sửa giao diện này, bạn sửa file:
      resources/views/errors/503.blade.php (Nếu chưa có sẵn hãy tạo folder errors và file 503.blade.php)

    - Để bật lại chế độ hoạt động, hãy chạy câu lệnh sau:
      - php artisan up
