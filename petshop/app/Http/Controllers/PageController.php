<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Products;

use App\Comment;
use DB;
use Session;


use Session;
use Hash;
use Auth;
use App\Sale;
use App\Addresss;



use App\Contact;
use App\Emailsale;





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

    public function postForgotpass(Request $req){
        $this->validate($req,
            [
                'account'=>'required',
                'email'=>'required|email'
            ],
            [
                'account.required'=>'Vui lòng nhập tài khoản',
                'email.required'=>'Vui lòng nhập email.',
                'email.email'=>'Không đúng định dạng email.',
            ]
        );
        $user = DB::table('users')
                ->where('account', $req->account)
                ->where('email', $req->email)
                ->get();
        if (count($user) > 0) {
            $password = DB::table('users')->where('account', $req->account)->value('password');
            Mail::send('email.forgot_pass', array('fullname'=>Input::get('account'), 'password'=>$password), function($message){
                $message->to(Input::get('email'))->subject('Quên mật khẩu!');
            });
            return redirect()->back()->with('thanhcong','Chúng tôi đã gửi mật khẩu về email của bạn. Vui lòng kiểm tra email.');
        } else {
            return redirect()->back()->with('thatbai','Tài khoản hoặc email sai.');
        }
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

        $map = Addresss::all();
    	return view('page.contact', compact('map'));

    }

    public function postContact(Request $req){
        $this->validate($req,
            [
                'name'=>'required|string|max:255',
                'email'=>'required|email',
                'Message'=>'required'
            ],
            [
                'name.required'=>'Vui lòng nhập tên của bạn.',
                'email.required'=>'Vui lòng nhập email.',
                'email.email'=>'Không đúng định dạng email.',
                'Message.required'=>'Vui lòng nhập tin nhắn'
            ]
        );
        $contact = new Contact();
        $contact->users_name = $req->name;
        $contact->users_email = $req->email;
        $contact->content = $req->Message;
        $contact->time = date('Y-m-d H:i:s');
        
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
        $com = DB::table('comment')->where('product_id',$req->id)->get();
    public function getProduct(Request $req){
        $sanpham= Products::where('products_id',$req->id)->first();
        //$sp_khac = Products::where('products_id', '<>',$type)->paginate(6);
    	return view('page.product',compact('sanpham','sp_khac'));

    }

    public function getSitemap(){

    public function getProduct(){
        
        //$sp_khac = Products::where('products_id', '<>',$type)->paginate(6);
    	return view('page.product',compact('sanpham','com'));

    }

    public function getSitemap(){
        
    	return view('page.sitemap');
    }

    public function getValues(){
        
    	return view('page.values');
    }

    public function getOffers(){    
    	return view('page.offers');

        $sale_hienthi = Sale::whereNull('sale_off_code')->paginate(15);     
    	return view('page.offers', compact('sale_hienthi'));
    }

    public function getGiohang(){
        
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
    public function postComment(Request $req){
        $id = $req->productid;
        $userid = Auth::user()->user_id;
        $comment = $req->comment;
        $com = new Comment();
        $com->user_id = $userid;
        $com->product_id = $id;
        $com->content = $comment;
        $com->save();
        return redirect()->route('chi-tiet-san-pham',$id);
    }
}
