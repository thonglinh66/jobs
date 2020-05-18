<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

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
        $account->password = bcrypt($request->get('code'));
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
}
