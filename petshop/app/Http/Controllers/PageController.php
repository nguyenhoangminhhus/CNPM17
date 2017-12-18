<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Products;

use Hash;
use Auth;



use Illuminate\Http\Request;

class PageController extends Controller
{
    

    //hiển thị
    public function getIndex_Admin(){
        
        return view('admin.index_admin');
    }

    public function getAdd_address(){
        
        return view('admin.add_address');
    }

    public function getAdd_category(){
        
        return view('admin.add_category');
    }

    public function getAdd_product(){
        
        return view('admin.add_products');
    }

    public function getAdd_sale(){
        
        return view('admin.add_sale');
    }

    public function getAdd_slide(){
        
        return view('admin.add_slide');
    }

    public function getChange_address(){
        
        return view('admin.change_address');
    }

    public function getChange_category(){
        
        return view('admin.change_category');
    }

    public function getChange_pass(){
        
        return view('admin.change_pass');
    }

    public function getChange_product(){
        
        return view('admin.change_product');
    }

    public function getChange_sale(){
        
        return view('admin.change_sale');
    }

    public function getChange_slide(){
        
        return view('admin.change_slide');
    }

    public function getEdit_profile(){
        
        return view('admin.edit_profile');
    }

    public function getForgot_pass(){
        
        return view('admin.forgot_pass');
    }

    public function getList_address(){
        
        return view('admin.list_address');
    }

    public function getList_bill(){
        
        return view('admin.list_bill');
    }

    public function getList_category(){
        
        return view('admin.list_category');
    }

    public function getList_inbox(){
        
        return view('admin.list_inbox');
    }

    public function getList_product(){
        
        return view('admin.list_products');
    }

    public function getList_sale(){
        
        return view('admin.list_sale');
    }

    public function getList_slide(){
        
        return view('admin.list_slide');
    }

    public function getList_user(){
        
        return view('admin.list_user');
    }

    public function getLogin_admin(){
        
        return view('admin.login');
    }

    public function getProfile_admin(){
        
        return view('admin.profile');
    }

    public function getReply_inbox(){
        
        return view('admin.reply_inbox');
    }

    public function getView_inbox(){
        
        return view('admin.view_inbox');
    }

    public function getIndex(){
        $category = Category::all();
        return view('page.trangchu', compact('category'));
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

    public function getProduct(){
        
    	return view('page.product');
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
        $sp_theoloai = Products::where('category_id', $type)->get();
        return view('page.category_products', compact('sp_theoloai'));
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
