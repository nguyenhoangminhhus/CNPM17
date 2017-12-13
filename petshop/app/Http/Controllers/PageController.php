<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }

    public function getDangky(){
    	return view('page.dangky');
    }

    public function getDangnhap(){
    	return view('page.dangnhap');
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

    public function getSignup(){
    	return view('page.signup');
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
}
