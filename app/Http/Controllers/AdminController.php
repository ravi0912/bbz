<?php

namespace App\Http\Controllers;

use App\AdminUser;
use App\Bylaws;
use App\Http\Requests\Admin\PrepareByeLawsRequest;
use App\Http\Requests\Admin\PrepareTendersRequest;
use App\Tender;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * auth page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
   public function admin(){
       return view('adminAuth.pinAuth');
   }

    /**
     * Admin authentication
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function pinAuth(Request $request){
        $adminUser = AdminUser::find(1);
        if($request['username'] == $adminUser->username && $request['password'] == $adminUser->password )
        {
            return redirect('/dataFeed');
        }

    }

    /**
     * Admin Landing page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dataFeed(){
        return view('adminAuth.index');
    }

    /**
     * View Bye Laws
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewAdminByelaws(){
        $byelaws = Bylaws::all();
        return view('adminAuth.byeLawsAdd',['byelaws' => $byelaws]);
    }

    /**
     * Add Byelaws
     * @param PrepareByeLawsRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addAdminByeLaws(PrepareByeLawsRequest $request){
        Bylaws::create([
            'city' => $request['city'],
            'link' => $request['link'],
            'issuing_authority' => $request['issuing_authority'],
            'description' => $request['description']
        ]);
        return redirect('/viewAdminByelaws');
    }

    /**
     * View all tenders
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewAdminTenders(){
        $tenders = Tender::all();
        return view('adminAuth.tenderAdd',['tenders' => $tenders]);
    }

    /**
     * Add Tender
     * @param PrepareTendersRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addAdminTenders(PrepareTendersRequest $request){
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

    /**
     * Show for Edit Tender
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEditAdminTenders($id){
        $tender = Tender::find($id);
        return view('adminAuth.editTender',['tender' => $tender]);
    }

    /**
     * Show for Edit ByeLaws
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEditAdminByelaws($id){
        $bylaw = Bylaws::find($id);
        return view('adminAuth.editByelaw',['bylaw' => $bylaw]);
    }

    /**
     * Update Tenders
     * @param PrepareTendersRequest $request
     */
    public function updateAdminTenders(PrepareTendersRequest $request)
    {
        Tender::where('id' ,$request['id'])->update([
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

    public function updateAdminByelaws(PrepareByeLawsRequest $request)
    {
        Tender::where('id' ,$request['id'])->update([
            'city' => $request['city'],
            'link' => $request['link'],
            'issuing_authority' => $request['issuing_authority'],
            'description' => $request['description']
        ]);
      return redirect('/viewAdminByelaws');
    }
}
