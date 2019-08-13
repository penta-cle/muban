<?php
namespace app\admin\Controller;
use think\Controller;
class Index extends Controller
{
    public function select()
    {
        return $this->fetch("list");
    }
    
}
