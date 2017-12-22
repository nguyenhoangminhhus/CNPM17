<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Products;
use Session;
use Hash;
use Auth;



use Illuminate\Http\Request;

class PageController extends Controller
{
    

    //hiển thị
    public function getIndex(){
        $category = Category::all();
        
        $sanpham_khuyenmai = Products::where('promotion_price','<>',0)->paginate(8);

        return view('page.trangchu', compact('category','sanpham_khuyenmai'));
    }
    function _construct(){
          $category = Category::all();
          if(Auth::check()){
            view()->share('nguoidung', Auth::user());
          }
    }

    public function getDangky(){
        
    	return view('page.dangky');
    }

    public function getDangnhap(){
        
    	return view('page.dangnhap');
    }

    public function getForgotpass(){
        
        return view('page.forgot_password');
    }

    public function getThongtin(){
        
    	return view('page.thongtin');
    }

    public function getCreditcard(){
        
    	return view('page.credit_card');
    }

    public function getChangepass(){
        
    	return view('page.change_pass');
    }

    public function getContact(){
        
    	return view('page.contact');
    }

    public function getEditinfor(){
        
    	return view('page.edit_infor');
    }

    public function getHelp(){
        
    	return view('page.help');
    }

    public function getInfor(){
        
    	return view('page.infor');
    }

    public function getInforbill(){
        
    	return view('page.infor_bill');
    }

    public function getListbill(){
        
    	return view('page.list_bill');
    }

    public function getMarketplace(){
        
    	return view('page.Market_place');
    }

    public function getPayment(){
        
    	return view('page.payment');
    }

    public function getPrivacy(){
        
    	return view('page.privacy');
    }

    public function getProduct(Request $req){
        $sanpham= Products::where('products_id',$req->id)->first();
        //$sp_khac = Products::where('products_id', '<>',$type)->paginate(6);
    	return view('page.product',compact('sanpham','sp_khac'));

    }

    public function getSitemap(){
        
    	return view('page.sitemap');
    }

    public function getValues(){
        
    	return view('page.values');
    }

    public function getOffers(){
        
    	return view('page.offers');
    }

    public function getCategory($type){
        $sp_theoloai = Products::where('category_id', $type)->paginate(4);
        $sp_khac = Products::where('category_id', '<>',$type)->paginate(6);
        $loai_sp = Category::where('category_id',$type)->first();
        return view('page.category_products', compact('sp_theoloai','sp_khac','loai_sp'));
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
    public function getSearch(Request $req){
        $price = (float)$req->key;
        
        $product = Products::where('name','like','%'. $req->key .'%')
                        ->orWhere(function($que) use ($price){
                            if($price > 0){
                                 $que->orWhere('unit_price',$price);
                            }
                            })

                       
                          
                         ->get();

            return view('page.search',compact('product'));
                                                           
    }
}
