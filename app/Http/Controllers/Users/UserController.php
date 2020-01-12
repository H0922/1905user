<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserController extends Controller
{

    //注册展示页面
    public function reglist(){
        return view('user.reglist');
    }

    //注册执行
    public function reginsert(){
        $data=request()->input();
        unset($data['_token']);
        // dd($data);
        echo $this->reg($data);
    }
    //登录展示页面
    public function loginlist(){
        return view('user.loginlist');

    }

    public function logininsert(){
        $data=request()->input();
        unset($data['_token']);
        echo $this->login($data);
    }
    public function userlist(){
        return view('user.userlist');

    }
    public function userselect(){
        $data=request()->input();
        unset($data['_token']);
        $name=$data['name'];
        $token=$data['pwd'];
        dump($this->userinfo($name,$token));

    }
    //注册接口测试
   public function reg($data){
        //数据
        $url='http://passport.bianaoao.top/pass/reg';
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_exec($ch);
        curl_close($ch);
   }
   
   //登录接口测试
   public function login($data){
    $url='http://passport.bianaoao.top/pass/login';
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_exec($ch);
    curl_close($ch);
   }

   //调用用户信息接口
   public function userinfo($name,$token){
    $url='http://passport.bianaoao.top/pass/Userinfo?name='.$name;
   // $token='qXN1YMYDrV2koWtNG6HtSO9l5Ybng5rj';
        $data=[
            'token:'.$token,
        ];
   // 初始化
   $ch = curl_init();
   //设置请求参数
   curl_setopt($ch,CURLOPT_URL,$url);
   curl_setopt($ch,CURLOPT_HTTPHEADER,$data);        // 自定义HTTP 头
   // 开启会话 发起请求
   $response = curl_exec($ch);
   // 获取错误信息
   $error = curl_error($ch);
   if($error)
   {
       var_dump($error);
       die;
   }
   // 关闭会话
   curl_close($ch);
   //处理响应
   dump(json_decode($response,true));
   }
}
