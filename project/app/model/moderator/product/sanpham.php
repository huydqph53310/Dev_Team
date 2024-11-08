<?php
// sanpham sẽ ở sau danh mục được chia đầu vào các tab

class Sanpham
{
    public $idsanpham, $iddanhmuc, $namesanpham, $mota, $price, $type, $img, $countclick;

    public function __construct(
        $idsanpham = null,
        $iddanhmuc = null,
        $namesanpham = null,
        $mota = null,
        $price = null,
        $type = null,
        $img = null,
        $countclick = null
    ) {
        $this->idsanpham = $idsanpham;
        $this->iddanhmuc = $iddanhmuc;
        $this->namesanpham = $namesanpham;
        $this->mota = $mota;
        $this->price = $price;
        $this->type = $type;
        $this->img = $img;
        $this->countclick = $countclick;
    }
}
