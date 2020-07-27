<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use DB;

class AccountController extends Controller
{
    // Hàm đỗ dữ liệu của một Khoa ra trang index
    public function index ()
    {
        
        $data = Account::all();

        return view('pages.admins.account.index', ['data' => $data]);
    }

    public function add ()
    {
        return view('pages.admins.account.add');
    }

    public function add_submit(Request $request)
    {
        $account = new Account();
        $account->code = $request->get('code');
        $account->type = $request->get('type');
        $account->password = bcrypt($request->get('password'));
        $account->save();
        return redirect('account')->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        $account = Account::findOrFail($id);

        return view('pages.admins.account.edit', compact('account'));
    }

    public function update(Request $request, $id)
    {
        $acount = Account::find($id);
        $acount->code = $request->get('code');
        $acount->type = $request->get('type');
        $acount->save();
        
        return redirect('account')->with('success', 'Cập nhật thành công');
    }

    public function delete($id)
    {
        $data = Account::findOrFail($id);
        $data->delete();
        // dd($data);
        return back()->with('success', 'Xóa thành công!');
    }

    public function post(){
        $data = DB::table('posts')->get();
        return view('pages.admins.account.post', ['data' => $data]);
    }

    public function deletepost ($id){
        $data = DB::table('posts')->where('id','=',$id)->delete();
        // dd($data);
        return back()->with('success', 'Xóa thành công!');
    }
    public function contact(){
        $data = DB::table('feedbacks')->get();
        return view('pages.admins.account.contact', ['data' => $data]);
    }

    public function deletecontact ($id){
        $data = DB::table('feedbacks')->where('id','=',$id)->delete();
        // dd($data);
        return back()->with('success', 'Xóa thành công!');
    }
    public function analyst(){
        $data = DB::table('applys')->join('business','business.code','=','applys.code')->get();
        return view('pages.admins.account.analyst', ['data' => $data]);
    }
}
