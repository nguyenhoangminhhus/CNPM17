<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\Products;
use App\Sale;
use App\Addresss;



use App\Contact;
use App\Emailsale;




use Hash;
use Auth;
use Mail;



use App\mail\sendMail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class PageController extends Controller
{
    
    //hiển thị
    public function getIndex_Admin(){
        if (Auth::check()) {
            return view('admin.index_admin');
        } else {
            return view ('admin.login');
        }
        
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

    public function postDangnhap_admin(Request $req){
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
        $credentials = array('account'=>$req->account, 'password'=>$req->password, 'active'=>1);
        $remember = $req->remember;
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('Admin');
        } else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Sai tài khoản hoặc mật khẩu hoặc tài khoản của bạn không phải là admin']);
        }

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

    public function postChangepass(Request $req){
        $this->validate($req,
            [
                'passwordold'=>'required',
                'password'=>'required|min:6|max:20',
                're_password'=>'required|same:password'
            ],
            [
                'passwordold.required'=>'Vui lòng nhập mật khẩu cũ.',
                'password.required'=>'Vui lòng nhập mật khẩu mới.',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự.',
                'password.max'=>'Mật khẩu nhiều nhất 20 ký tự.',
                're_password.required'=>'Vui lòng nhập lại mật khẩu mới.',
                're_password.same'=>'Nhập lại mật khẩu không đúng.'
            ]
        );
        $user = User::find(Auth::user()->user_id);
        if ($req->password == $req->passwordold) {
            return redirect()->back()->with('thatbai', 'Mật khẩu mới không được trùng với mật khẩu cũ');
        } else {
            if (Hash::check($req->passwordold, $user['password'])){
                $user->password = Hash::make($req->password);
                $user->save();
                return redirect()->back()->with('thanhcong', 'Bạn đã đổi mật khẩu thành công. Bạn phải đăng nhập lại');
            } else {
                return redirect()->back()->with('thatbai', 'Bạn đã nhập sai mật khẩu cũ.');
            }
        }
        
    }

    public function getContact(){
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
        
        $contact->Stt = 'Chưa xem';
        $contact->save();

        return redirect()->back()->with('thanhcong', 'Bạn đã gửi tin nhắn thành công. Chúng tôi sẽ gửi mail trả lời cho bạn trong 24h. Xin cảm ơn');
    }

    public function getEditinfor(){
        $user = Auth::user();
    	return view('page.edit_infor', compact('user'));

    }

    public function getHelp(){
        
    	return view('page.help');
    }

    public function getInfor(){

        
    	$user = Auth::user();
    	return view('page.infor', compact('user'));
    }

    public function postEditinfor(Request $req){
        $this->validate($req,
            [
                'fullname'=>'required|string|max:255',
                'email'=>'required|email',
                'phone'=>'required|int',
                'address'=>'required'
            ],
            [
                'fullname.required'=>'Vui lòng nhập tên của bạn.',
                'phone.required'=>'Vui lòng nhập số điện thoại.',
                'phone.int'=>'Vui lòng nhập đúng định dạng số',
                'email.required'=>'Vui lòng nhập email.',
                'email.email'=>'Không đúng định dạng email.',
                'email.unique'=>'Email đã có người sử dụng.',
                'address.required'=>'Vui lòng nhập địa chỉ.'
            ]
        );
        $user = Auth::user();
        if ($req->email == $user->email) {
            $user->fullname = $req->fullname;
            $user->phone = $req->phone;
            $user->address = $req->address;
            $user->save();
            return redirect()->back()->with('thanhcong', 'Sửa thông tin thành công');
        } else {
            $this->validate($req,
                [
                    'email'=>'unique:users,email'
                ],
                [
                    'email.unique'=>'Email đã có người sử dụng.'
                ]
            );
            $user->fullname = $req->fullname;
            $user->phone = $req->phone;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->save();
            return redirect()->back()->with('thanhcong', 'Sửa thông tin thành công');
        }

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

        $category = Category::all();
    	return view('page.sitemap', compact('category'));

    }

    public function getValues(){
        
    	return view('page.values');
    }

    public function getOffers(){
        $sale_hienthi = Sale::whereNull('sale_off_code')->paginate(15);     
    	return view('page.offers', compact('sale_hienthi'));
    }

    public function getGiohang(){
        
        return view('page.giohang');
    }

    public function getActive(){
        
        return view('page.active');
    }

    public function getCategory($type){
        $sp_theoloai = Products::where('category_id', $type)->get();
        return view('page.category_products', compact('sp_theoloai'));
    }

    public function getSale($type){
        $sp_theokhuyenmai = Products::where('saleoff_id', $type)->get();
        $sale_view = Sale::where('sale_id', $type)->first();
        return view('page.sale', compact('sp_theokhuyenmai', 'sale_view'));
    }

    //hành động
    public function postDangky(Request $req){
        $random = rand(100000, 999999);
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
        $user->sign_date = date('Y-m-d');
        
        $user->active_code = $random;
        $user->save();

        Mail::send('email.user-activation', array('name'=>$user->fullname, 'code'=>$random), function($message){
            $message->to(Input::get('email'), Input::get('fullname'))->subject('Mã kích hoạt tài khoản!');
        });

        return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công. Vui lòng kiểm tra email để xác thực tài khoản trước khi đăng nhập.');
        
    }

    public function postActive(Request $req){
        $this->validate($req,
            [
                'account'=>'required|min:6|max:25',
            ],
            [
                'account.required'=>'Vui lòng nhập tên tài khoản.',
                'account.min'=>'Tài khoản ít nhất 6 ký tự.',
                'account.max'=>'Tài khoản nhiều nhất 25 ký tự.',
            ]
        );

        $check = array('account'=>$req->account, 'active_code'=>$req->code, 'active'=>0);


        $check = array('account'=>$req->account, 'active_code'=>$req->code, 'active'=>0);


        $user = DB::table('users')
                ->where('account', $req->account)
                ->where('active_code', $req->code)
                ->where('active', 0)
                ->get();
        if (count($user) > 0) {
            DB::table('users')
                ->where('account', $req->account)
                ->update(['active' => 1]);

            return redirect()->back()->with('thanhcong','Tài khoản của bạn đã kích hoạt thành công.');


            return redirect()->back()->with('thanhcong','Tài khoản của bạn đã kích hoạt thành công.');

            return redirect()->back()->with('thanhcong','Tài khoản của bạn đã kích hoạt thành công. Bạn có thể đăng nhập ngay.');


        } else {
            return redirect()->back()->with('thatbai','Sai tài khoản hoặc mã code hoặc tài khoản của bạn đã được kích hoạt');
        }
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
        $credentials = array('account'=>$req->account, 'password'=>$req->password, 'active'=>0);
        $remember = $req->remember;
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('trang-chu');
        } else {
            return redirect()->back()->with(['flag'=>'danger','message'=>'Sai tài khoản hoặc mật khẩu hoặc tài khoản của bạn chưa được kích hoạt']);
        }

    }



    public function postEmailsale(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:emailsale,email',
            ],
            [
                'email.required'=>'Vui lòng nhập email.',
                'email.email'=>'Không đúng định dạng email.',
                'email.unique'=>'Email đã được hưởng khuyến mãi.',
            ]
        );
        $email = new Emailsale();
        $email->email = $req->email;
        $email->sale_id = '17';
        $email->save();

        Mail::send('email.emailsale', array('name'=>'bạn', 'code'=>'SALE25CODE', 'dateto'=>'31/1/2018'), function($message){
            $message->to(Input::get('email'))->subject('Mã khuyến mãi cho email mới!');
        });

        return redirect()->back()->with('thanhcong', 'Chúng tôi đã gửi mã khuyến mãi. Xin kiểm tra email của bạn');
    }



    public function postDangxuat(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }
}
