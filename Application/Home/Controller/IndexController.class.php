<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }

    public function detail(){
    	$pro = I('get.province');
    	$map['province'] = $pro;
    	$puke = M('puke')->where($map)->select();
    	$benshuo = M('benshuo')->where($map)->select();
    	$guofang = M('guofang')->where($map)->select();
    	$this->puke = $puke;
    	$this->benshuo = $benshuo;
    	$this->guofang = $guofang;
    	$this->display();
    }
}