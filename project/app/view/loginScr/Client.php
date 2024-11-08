<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin khách hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }

        .profile-header {
            background-color: #8a4de8;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .profile-header img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 5px solid white;
        }

        .profile-content {
            margin-top: -30px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .social-icons a {
            color: #8a4de8;
            font-size: 1.2em;
            margin: 0 10px;
        }

        .social-icons a:hover {
            color: #6b3fc9;
        }

        /* Header and Footer */
        .custom-header {
            background-color: #f8f9fa;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        footer a {
            color: #adb5bd;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #f8f9fa;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="custom-header">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <div class="logo">
                <a class="h3" style="color:#8a4de8;" href="?wh=">HuyDev</a>
            </div>
            <div class="search-bar w-50">
                <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm...">
            </div>
            <div class="account-popup">
                <div class="d-flex">
                    <a href="?wh=login" class="btn btn-outline-primary me-2">Chỉnh Sửa</a>
                    <a href="?wh=logout" class="btn btn-outline-primary me-2">Đăng Xuất</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Profile Header -->
    <section class="profile-header">
        <div class="container text-center">
            <img src="/devshop/project/asset/img/Backgroud.jpg" alt="Avatar">
            <h2> <?= $data->name ?></h2>
            <p class="lead">Khách hàng thân thiết</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </section>

    <!-- Profile Content -->
    <section class="profile-content py-5">
        <div class="container">
            <div class="row">
                <!-- Thông tin cá nhân -->
                <div class="col-md-6 mb-4">
                    <div class="card p-4">
                        <h5 class="card-title">Thông tin cá nhân</h5>
                        <p><strong>Họ tên:</strong> <?= $data->name ?></p>
                        <p><strong>Email:</strong> <?= $data->email ?></p>
                        <p><strong>Số điện thoại:</strong> <?= $data->phone ?></p>
                        <p><strong>Địa chỉ:</strong> 123 Đường ABC, Thành phố XYZ</p>
                    </div>
                </div>

                <!-- Thông tin tài khoản -->
                <div class="col-md-6 mb-4">
                    <div class="card p-4">
                        <h5 class="card-title">Thông tin tài khoản</h5>
                        <p><strong>Tên người dùng:</strong> <?= $data->username ?></p>
                        <p><strong>Loại tài khoản:</strong> <?= $data->premium = 0 ? "Premium" : "Thường" ?></p>
                        <p><strong>Ngày tham gia:</strong> <?= $data->johndate ?></p>
                        <p><strong>Điểm tích lũy:</strong> <?= $data->point ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Thông tin liên hệ</h5>
                    <p>Địa chỉ: 123 Đường ABC, Thành phố XYZ</p>
                    <p>Email: contact@example.com</p>
                    <p>Điện thoại: 0123 456 789</p>
                </div>
                <div class="col-md-4">
                    <h5>Liên kết nhanh</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Chính sách bảo hành</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Kết nối với chúng tôi</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i> Twitter</a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>