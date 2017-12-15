<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use Hash;
use Auth;



use Illuminate\Http\Request;

class PageController extends Controller
{
    

    //hiển thị
    public function getIndex(){
        $category = Category::all();
        return view('page.trangchu', compact('category'));
    }

    public function getDangky(){
        $category = Category::all();
    	return view('page.dangky', compact('category'));
    }

    public function getDangnhap(){
        $category = Category::all();
    	return view('page.dangnhap', compact('category'));
    }

    public function getForgotpass(){
        $category = Category::all();
        return view('page.forgot_password', compact('category'));
    }

    public function getThongtin(){
        $category = Category::all();
    	return view('page.thongtin', compact('category'));
    }

    public function getCreditcard(){
        $category = Category::all();
    	return view('page.credit_card', compact('category'));
    }

    public function getChangepass(){
        $category = Category::all();
    	return view('page.change_pass', compact('category'));
    }

    public function getContact(){
        $category = Category::all();
    	return view('page.contact', compact('category'));
    }

    public function getEditinfor(){
        $category = Category::all();
    	return view('page.edit_infor', compact('category'));
    }

    public function getHelp(){
        $category = Category::all();
    	return view('page.help', compact('category'));
    }

    public function getInfor(){
        $category = Category::all();
    	return view('page.infor', compact('category'));
    }

    public function getInforbill(){
        $category = Category::all();
    	return view('page.infor_bill', compact('category'));
    }

    public function getListbill(){
        $category = Category::all();
    	return view('page.list_bill', compact('category'));
    }

    public function getMarketplace(){
        $category = Category::all();
    	return view('page.Market_place', compact('category'));
    }

    public function getPayment(){
        $category = Category::all();
    	return view('page.payment', compact('category'));
    }

    public function getPrivacy(){
        $category = Category::all();
    	return view('page.privacy', compact('category'));
    }

    public function getSignup(){
        $category = Category::all();
    	return view('page.signup', compact('category'));
    }

    public function getSitemap(){
        $category = Category::all();
    	return view('page.sitemap', compact('category'));
    }

    public function getValues(){
        $category = Category::all();
    	return view('page.values', compact('category'));
    }

    public function getOffers(){
        $category = Category::all();
    	return view('page.offers', compact('category'));
    }

    //hành động
    public function postDangky(Request $req){
        $this->validate($req,
            [
                'fullname'=>'required|string|max:255',
                'account'=>'required|min:6|max:25|unique:users,account',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                're_password'=>'required|same:password'
            ],
            [
                'fullname.required'=>'Vui lòng nhập tên của bạn.',
                'account.required'=>'Vui lòng nhập tên tài khoản.',
                'account.unique'=>'Tài khoản đã có người sử dụng.',
                'account.min'=>'Tài khoản ít nhất 6 ký tự.',
                'account.max'=>'Tài khoản nhiều nhất 25 ký tự.',
                'email.required'=>'Vui lòng nhập email.',
                'email.email'=>'Không đúng định dạng email.',
                'email.unique'=>'Email đã có người sử dụng.',
                'password.required'=>'Vui lòng nhập mật khẩu.',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự.',
                'password.max'=>'Mật khẩu nhiều nhất 20 ký tự.',
                're_password.required'=>'Vui lòng nhập lại mật khẩu.',
                're_password.same'=>'Nhập lại mật khẩu không đúng.'
            ]
        );
        $user = new User();
        $user->fullname = $req->fullname;
        $user->account = $req->account;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->role = '1';
        $user->sign_date = '1995-01-06';
        $user->save();
        return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công');
        Auth::login($user);
    }

    public function postDangnhap(Request $req){
        $this->validate($req,
            [
                'account'=>'required|min:6|max:25',
                'password'=>'required|min:6|max:20'
            ],
            [
                'account.required'=>'Vui lòng nhập tên tài khoản.',
                'account.min'=>'Tài khoản ít nhất 6 ký tự.',
                'account.max'=>'Tài khoản nhiều nhất 25 ký tự.',
                'password.required'=>'Vui lòng nhập mật khẩu.',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự.',
                'password.max'=>'Mật khẩu nhiều nhất 20 ký tự.'
            ]
        );
        $credentials = array('account'=>$req->account, 'password'=>$req->password);
        if (Auth::attempt($credentials)) {
            return redirect()->route('trang-chu');
        } else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Sai tài khoản hoặc mật khẩu']);
        }

    }

    public function postDangxuat(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
}
