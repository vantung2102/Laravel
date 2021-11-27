<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
| Điều đầu tiên chúng ta sẽ làm là tạo một phiên bản ứng dụng Laravel mới, 
| nó đóng vai trò là "chất kết dính" cho tất cả các thành phần của Laravel và
| là vùng chứa IoC cho hệ thống liên kết tất cả các phần khác nhau.
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces - Ràng buộc các giao diện quan trọng
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
| Tiếp theo, chúng ta cần liên kết một số giao diện quan trọng vào vùng 
| chứa để chúng ta có thể giải quyết chúng khi cần thiết. 
|Các hạt nhân phục vụ các yêu cầu đến ứng dụng này từ cả web và CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application - Trả lại ứng dụng
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
| Tập lệnh này trả về phiên bản ứng dụng. Phiên bản được cấp cho tập lệnh
| gọi để chúng ta có thể tách việc xây dựng phiên bản khỏi quá trình 
| chạy thực tế của ứng dụng và gửi phản hồi.
|
*/

return $app;
