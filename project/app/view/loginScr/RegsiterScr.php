<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f3f4f6;
        }

        .main-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-title {
            color: #8a4de8;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-primary {
            background-color: #8a4de8;
            border-color: #8a4de8;
        }

        .btn-primary:hover {
            background-color: #a885f7;
            border-color: #a885f7;
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

        .dropdown-menu {
            padding: 10px;
        }

        .account-popup {
            position: relative;
        }

        .account-dropdown {
            position: absolute;
            top: 50px;
            right: 0;
            display: none;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            z-index: 1000;
            width: 200px;
        }

        .account-popup:hover .account-dropdown {
            display: block;
        }

        a {
            color: #343a40;
            text-decoration: none;
            padding: 10px 0;
            display: block;
            text-align: center;
        }

        .account-dropdown a:hover {
            background-color: #f0f2f5;
            border-radius: 6px;
        }

        .search-bar input {
            border-radius: 20px;
            border: 1px solid #d1d5db;
            padding: 10px 20px;
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
                    <a href="?wh=login" class="btn btn-outline-primary me-2">Đăng nhập</a>
                    <a href="?wh=reg" class="btn btn-primary">Đăng ký</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-container">
        <div class="login-container">
            <?php if ($tbsus != "") { ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?php echo $tbsus; ?>
                </div>
            <?php } ?>
            <?php if ($tberr != ""): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?php echo $tberr; ?>
                </div>
            <?php endif; ?>
            <h2 class="login-title">Đăng Ký</h2>
            <form id="loginForm" action="" method="post">
                <div class="mb-3">
                    <label for="Yourname" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="Your Email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="Your Phone" class="form-label">Your Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="User Name" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">PassWord</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" name="checkbox">
                    <span>đồng ý với <a href="" class="dieukhoan">điều khoản của công ty</a></span>
                </div>
                <button type="submit" name="regsiter" class="btn btn-primary w-100">Đăng Ký</button>
            </form>
            <p class="text-center mt-3">Chưa có tài khoản? <a href="?wh=reg">Đăng ký</a></p>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>