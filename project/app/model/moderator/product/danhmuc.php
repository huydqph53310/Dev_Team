<?php
// danh mục là model được đưa vào đầu tiên
class Danhmuc
{
    public $id, $namedanhmuc, $countclick, $img;

    public function __construct($id = null, $namedanhmuc = null, $countclick = null, $img = null)
    {
        $this->id = $id;
        $this->namedanhmuc = $namedanhmuc;
        $this->countclick = $countclick;
        $this->img = $img;
    }
}
