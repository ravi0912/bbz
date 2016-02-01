<?php

namespace App\Http\Controllers;

use App\AdminUser;
use App\Bylaws;
use App\Http\Requests\Admin\PrepareByeLawsRequest;
use App\Tender;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
   public function admin(){
       return view('adminAuth.pinAuth');
   }

    public function pinAuth(Request $request){
        $adminUser = AdminUser::find(1);
        if($request['username'] == $adminUser->username && $request['password'] == $adminUser->password )
        {
            return redirect('/dataFeed');
        }

    }

    public function dataFeed(){
        return view('adminAuth.index');
    }
    public function viewAdminByelaws(){
        $byelaws = Bylaws::all();
        return view('adminAuth.byeLawsAdd',['byelaws' => $byelaws]);
    }

    public function addAdminByeLaws(PrepareByeLawsRequest $request){
        Bylaws::create([
            'city' => $request['city'],
            'link' => $request['link'],
            'issuing_authority' => $request['issuing_authority'],
            'description' => $request['description']
        ]);
        return redirect('/viewAdminByelaws');
    }

    public function viewAdminTenders(){
        $tenders = Tender::all();
        return view('adminAuth.tenderAdd',['tenders' => $tenders]);
    }

    public function addAdminTenders(PrepareByeLawsRequest $request){
        Tender::create([
            'city' => $request['city'],
            'state' => $request['state'],
            'description' => $request['description'],
            'ownership' => $request['ownership'],
            'industry' => $request['industry'],
            'product_category' => $request['product_category'],
            'estimated_value' => $request['estimated_value'],
            'open_date' => $request['open_date'],
            'close_date' => $request['close_date'],
            'title' => $request['title'],
            'link' => $request['link'],
            'issuing_authority' => $request['issuing_authority'],
        ]);
        return redirect('/viewAdminTenders');
    }
}
