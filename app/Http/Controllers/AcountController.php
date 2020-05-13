<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acount;

class AcountController extends Controller
{
    // Hàm đỗ dữ liệu của một Khoa ra trang index
    public function index ()
    {
        
        $data = Acount::all();

        return view('pages.admins.acount.index', ['data' => $data]);
    }

    public function add ()
    {
        return view('pages.admins.acount.add');
    }

    public function add_submit(Request $request)
    {
        $acount = new Acount();
        $acount->code = $request->get('code');
        $acount->type = $request->get('type');
        $acount->save();
        return redirect('acount')->with('success', 'Thêm thành công');
    }

    public function edit($id)
    {
        $acount = Acount::findOrFail($id);

        return view('pages.admins.acount.edit', compact('acount'));
    }

    public function update(Request $request, $id)
    {
        $acount = Acount::find($id);
        $acount->code = $request->get('code');
        $acount->type = $request->get('type');
        $acount->save();
        
        return redirect('acount')->with('success', 'Cập nhật thành công');
    }

    public function delete($id)
    {
        $data = Acount::findOrFail($id);
        $data->delete();
        // dd($data);
        return back()->with('success', 'Xóa thành công!');
    }
}
