<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Products;
use App\Customer;
use App\Transaction;
use App\Billdetails;
use App\Sale;
use DB;
use Session;
use Hash;
use Auth;
use Cart;



use Illuminate\Http\Request;

class PageController extends Controller
{
    

    //hiển thị
    public function getIndex(){
        $category = Category::all();
        
        $sanpham_khuyenmai = Products::where('promotion_price','<>',0)->paginate(8);

        return view('page.trangchu', compact('category','sanpham_khuyenmai'));
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


    public function getMarketplace(){
        
    	return view('page.Market_place');
    }

    public function getPayment(){
    	
        if(Cart::count() != 0){
            return view('page.payment');
        }else{
            return redirect()->route('gio-hang')->with(['flash_message'=>'Bạn chưa có sản phẩm nào trong giỏ hàng']);
        }
        
    }

    public function getPrivacy(){
        
    	return view('page.privacy');
    }

    public function getProduct(Request $req){
        $sanpham= Products::where('products_id',$req->id)->first();
    	return view('page.product',compact('sanpham'));
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
        //$sp_khac = Products::where('category_id', '<>',$type)->paginate(2);
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
        $product = Products::where('name','like','%'.$req->key.'%')
                        ->orWhere('unit_price',$req->key)      
                        ->get();

            return view('page.search',compact('product'));
                                                           
    }
    //Thêm sp vào giỏ hàng
    public function muahang($id){
       
        $product_buy = DB::table('products')->where('products_id',$id)->first();
       
        if($product_buy->status > 0){
            Cart::add(array('id'=>$id,'name'=>$product_buy->name,'qty'=>1,'price'=>$product_buy->unit_price, 'options'=>array('img'=>$product_buy->image)));
        
            return redirect()->route('gio-hang');
        }else{
            return redirect()->route('chi-tiet-san-pham',$id)->with(['flash_message'=>'Hết hàng']);
        }
        
    }

    //lấy dữ liệu của giỏ hàng
    public function getGiohang(){
        $content = Cart::content();
        return view('page.giohang',compact('content'));
    }

    //xóa sp giỏ hàng
    public function xoaspgiohang($id){
        Cart::remove($id);
        return redirect()->route('gio-hang');
    }

    //cập nhật giỏ hàng
    public function capnhatgiohang($id,$qty){
       Cart::update($id,$qty);
        return redirect()->route('gio-hang');
    
    }

    //đặt hàng và lưu thông tin vào csdl
    public function dathang(Request $req){
        
        $hoten = "";
        $sdt = 0;
        $mail = "";
        $diachi = "";
        $trangthai = 0;

        $giamgia = 0;
        $sale = DB::table('sale')->get();
        foreach ($sale as $a) {
            if ($req->saleid == $a->sale_id) {
                $giamgia =($a->sale_percent * Cart::subtotal(0,0,''))/100;
            }
        }
        $phigiaohang = 0;
        $phuongthucvanchuyen = $req->optradio;
        $test = "Giao hàng nhanh (Thời gian: 1-2 ngày) - phí giao hàng: 30.000 VNĐ";
        if (strcmp($req->optradio, $test) == 0) {
            $phigiaohang = 30000;
        }
        $tonggiadonhang = Cart::subtotal(0,0,'') - $giamgia + $phigiaohang;
        
        if (Auth::check()) {
            $tran = new Transaction;
            $tran->users_id = Auth::user()->user_id;
            $tran->date_oder = date('Y-m-d');
            if (strcmp($req->optradio, $test) == 0) {
                $tran->date_delivery = date( "Y-m-d",strtotime('+2 days'));
            }else{
                $tran->date_delivery = date( "Y-m-d",strtotime('+5 days'));   
            }
            foreach ($sale as $a) {
                if ( $a->sale_id == $req->saleid) {
                    $tran->sale_id = $req->saleid;
                }else{
                    $tran->sale_id = null;
                }
            }
            
            $tran->payment = $req->optradio;
            $tran->total =$tonggiadonhang;
            $tran->node = $req->note;
            $tran->status = 0;
            $tran->save();

            foreach (Cart::content() as $item) {
                $bill = new Billdetails;
                $bill->Transaction_id = $tran->transaction_id;
                $bill->products_id = $item->id;
                $bill->quantity = $item->qty;
                $bill->unit_price = $item->price;
                $bill->save();
            }
            $hoten = Auth::user()->fullname;
            $sdt = Auth::user()->phone;
            $mail = Auth::user()->email;
            $diachi = Auth::user()->address;
            $trangthai = $tran->status;

        } else{
            $customer = new Customer;
            $customer->customer_name = $req->hoten;
            $customer->customer_phone = $req->phone;
            $customer->customer_email = $req->email;
            $customer->customer_address = $req->address;
            $customer->save();

            $tran = new Transaction;
            $tran->customer_id = $customer->customer_id;
            $tran->date_oder = date('Y-m-d');
            if (strcmp($req->optradio, $test) == 0) {
                $tran->date_delivery = date( "Y-m-d",strtotime('+2 days'));
            }else{
                $tran->date_delivery = date( "Y-m-d",strtotime('+5 days'));   
            }
            $tran->sale_id = $req->saleid;
            $tran->payment = $req->optradio;
            $tran->total =$tonggiadonhang;
            $tran->node = $req->note;
            $tran->status = 0;
            $tran->save();
            foreach (Cart::content() as $item) {
                $bill = new Billdetails;
                $bill->Transaction_id = $tran->transaction_id;
                $bill->products_id = $item->id;
                $bill->quantity = $item->qty;
                $bill->unit_price = $item->price;
                $bill->save();
            }
            $hoten = $customer->customer_name;
            $sdt = $customer->customer_phone;
            $mail = $customer->customer_email;
            $diachi = $customer->customer_address;
            $trangthai = $tran->status;
        }


        return view('page.infor_bill',compact('giamgia','phigiaohang','tonggiadonhang','phuongthucvanchuyen','hoten','sdt','mail','diachi','trangthai'));

    }


    //lấy dữ liệu giỏ hàng cho user
    public function getListbill(){   
        if(Auth::check()){
            $userid = Auth::user()->user_id;
            $usertran = DB::table('transaction')->where('users_id',$userid)->get();
            return view('page.list_bill',compact('usertran'));
        } 
    }

    //lấy dữ liệu giỏ hàng cho customer
    public function custListbill(Request $req){
        $cusid = $req->checkbill;
        $custran = DB::table('transaction')->where('transaction_id',$cusid)->get();
        return view('page.cus_list_bill',compact('custran'));
    }

   
}
