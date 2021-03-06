Bước 01: Tiếp nhận Request và khởi động (Bootstrap):

     - Người dùng (Client) sẽ gửi Request tới file public/index.php,
     đây sẽ là file chạy đầu tiên khi có Request từ phía người dùng.

     - Đăng ký cơ chế autoload
        require __DIR__.'/../vendor/autoload.php';

        Hiểu một cách đơn giản, Autoload sẽ thay thế các lệnh require, include.
        Chỉ cần trong các file có tên Class trùng với tên file và có namespace theo quy tắc,
        hệ thống sẽ tự động load các file đó mà không cần phải sử dụng các lệnh require hoặc include

     - Import ứng dụng
     - $app = require_once __DIR__.'/../bootstrap/app.php';

     - Trong file bootstrap/app.php sẽ thực hiện các nhiệm vụ sau:

        - Tạo ứng dụng
        - Đăng ký các interface cần thiết
        - Trả về đối tượng ứng dụng ($app)

Buớc 02: Chạy ứng dụng:

    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    $response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
    );

    $response->send();

    $kernel->terminate($request, $response);

    Bước này vẫn ở trong file public/index.php

    Hệ thống sẽ nhận đối tượng $app trả về từ bước 1, sau đó thực hiện 2 công việc:

        - Xử lý Request
        - Trả về Response

Bước 03: HTTP Kernel

    HTTP Kernel sẽ thực hiện các công việc trước khi Request được thực thi (Tiền xử lý):

        - Xử lý lỗi
        - Cấu hình log
        - Xác định môi trường
        - Xác thực bảo mật
        - Bộ lọc trung gian mặc định (Middleware default)
        - HTTP Session
        - Và rất nhiều công việc khác

Bước 04: Service providers

    Hiểu một cách cơ bản Service Providers chính là trung tâm khởi tạo các ứng dụng của Laravel.
    Service Providers khởi động rất nhiều thành phần khác nhau trong core cũng như các
    package được cài thêm vào (Sẽ tìm hiểu ở các bài học tiếp theo)

Bước 05: Router

    Sau khi hoàn tất công việc ở bước 4, request sẽ gửi đến Router để định tuyến đến các Controller tương ứng.
    Ngay lúc này sẽ xảy ra 2 trường hợp:

        - Trường hợp 01: Router => Controller => Action
        - Trường hợp 02: Router => Middleware => Controller => Action

        Với trường hợp 2, Request sẽ phải chạy qua bộ lọc trung gian (Middleware) trước khi vào Controller tương ứng

Bước 06: Middleware

    - Middleware chính là bộ lọc trung gian giúp lọc Request từ phía Router,
    trong Middleware lập trình viên sẽ thiết lập các điều kiện để cho Request đi tiếp hoặc dừng lại.

    - Middleware được chia thành 3 loại:

        - Global Middleware
        - Route Middleware
        - Middleware Groups

Bước 07: Controller/Action

    - Thành phần này sẽ xử lý các Request, sau đó trả về Response.

    - Trong quá trình xử lý bước này còn phải gọi Models để thao tác với cơ sở dữ liệu.

Bước 08: Phương thức trả về

    Sau khi Request được xử lý xong, Response sẽ được trả về cho người dùng (Clients)
    thông qua View (Giao diện), sẽ có những trường hợp không thông qua Views (JSON, XML, Download,…)
