<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Bán Máy Tính</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .custom-header {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: white;
            padding: 20px 0;
        }

        .custom-nav {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .carousel-item img {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            border-radius: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #6a11cb;
            border-color: #6a11cb;
        }

        .btn-primary:hover {
            background-color: #2575fc;
            border-color: #2575fc;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
        }

        footer a {
            color: #adb5bd;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #f8f9fa;
        }

        .section-title {
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            width: 50px;
            height: 4px;
            background-color: #6a11cb;
            position: absolute;
            left: 0;
            bottom: -10px;
        }

        .col-md-3 {
            padding-top: 20px;
        }

        .link {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="custom-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <h1 class="h3">LOGO</h1>
            </div>
            <div class="search-bar w-50">
                <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm...">
            </div>
            <div class="user">
                <?php if (!isset($_SESSION["username"])) { ?>
                    <div class="account-popup">
                        <div class="d-flex">
                            <a href="?wh=login" class="btn btn-light me-2 shadow-sm border border-primary text-primary d-flex align-items-center">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Đăng nhập
                            </a>
                            <a href="?wh=reg" class="btn btn-primary shadow-sm d-flex align-items-center">
                                <i class="bi bi-person-plus-fill me-1"></i> Đăng ký
                            </a>
                        </div>
                    </div>
                <?php } else { ?>
                    <a href="?wh=client&?id=<?= $_SESSION["id"] ?>" class="text-decoration-none text-dark d-flex align-items-center">
                        <i class="bi bi-person-circle me-2"></i> Xin chào, <?= $_SESSION["username"] ?>
                    </a>
                <?php } ?>
            </div>

        </div>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg custom-nav py-3">
        <div class="container">
            <a class="navbar-brand" href="#">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Danh mục</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mt-4">

        <!-- Slider -->
        <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Danh mục sản phẩm -->
        <section class="product-category mb-5">
            <h2 class="section-title">Danh mục sản phẩm</h2>
            <div class="row">
                <div class="col-md-3">
                    <a href="?wh=login?id=10" class="link">
                        <div class="card">
                            <img src="https://via.placeholder.com/200" class="card-img-top" alt="Category 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Laptop</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Category 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Máy tính bàn</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Category 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Linh kiện</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Category 4">
                        <div class="card-body text-center">
                            <h5 class="card-title">Phụ kiện</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sản phẩm bán chạy -->
        <section class="best-sellers mb-5">
            <h2 class="section-title">Sản phẩm bán chạy</h2>
            <div class="row">
                <!-- Repeatable Product Card -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Product 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Mô tả sản phẩm 1</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <!-- Repeatable Product Cards -->
            </div>
        </section>

        <!-- Sản phẩm trưng bày -->
        <section class="featured-products mb-5">
            <h2 class="section-title">Sản phẩm trưng bày</h2>
            <div class="row">
                <!-- Repeatable Product Card -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Product 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Mô tả sản phẩm 2</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Product 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Mô tả sản phẩm 2</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Product 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Mô tả sản phẩm 2</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Product 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Mô tả sản phẩm 2</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Product 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Mô tả sản phẩm 2</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <!-- Repeatable Product Cards -->
            </div>
        </section>

        <!-- Sản phẩm nổi bật -->
        <section class="highlighted-products mb-5">
            <h2 class="section-title">Sản phẩm nổi bật</h2>
            <div class="row">
                <!-- Repeatable Product Card -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/200" class="card-img-top" alt="Product 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sản phẩm 3</h5>
                            <p class="card-text">Mô tả sản phẩm 3</p>
                            <a href="#" class="btn btn-primary">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <!-- Repeatable Product Cards -->
            </div>
        </section>

    </main>

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