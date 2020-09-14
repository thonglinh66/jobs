<?php

namespace App\Http\Controllers;
use App\Charts\UserChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Account;
use DB;
use Illuminate\Database\QueryException;
use Carbon\Carbon;

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
//---------------------------------------------------------List_post
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
    // public function analyst(){
    //     $data = DB::table('business')->join('applys','applys.code','=','business.code')
    //     ->select('business.code','business.name',DB::raw('count(business.code) as countt'))
    //     ->groupBy('business.code')
    //     ->get();

    //     return view('pages.admins.account.analyst', ['data' => $data]);
    // }
    public function analyst(){
        $datacs = DB::table('business')->join('posts','posts.code','=','business.code')
        ->select('business.code','business.name','posts.success',DB::raw('sum(posts.success) as countts'))
        ->groupBy('business.code')
        ->get();
        $databs = DB::table('business')->join('applys','applys.code','=','business.code')
        ->select('business.code','business.name',DB::raw('count(business.code) as countt'))
         ->groupBy('business.code')
        ->get();
        

        return view('pages.admins.account.analyst', ['databs' => $databs],['datacs' => $datacs]);
    }
    public function drawcharts (){
        $datacs = DB::table('business')->join('posts','posts.code','=','business.code')
        ->select('business.name',DB::raw('sum(posts.success) as countts'))
        ->groupBy('business.code')
        ->get()->toArray();
        $databs = DB::table('business')->join('applys','applys.code','=','business.code')
        ->select('business.name',DB::raw('count(business.code) as countt'))
        ->groupBy('business.code')
        ->get()->toArray();
        
        $counts = [];
        $countb = [];
        $name = [];
        foreach($datacs as $data){
            $counts[] = $data->countts;
            $name[] = $data->name;
        }
        foreach($databs as $data){
            $countb[] = $data->countt;
        }
        $color = [
            '#5158e2',
            '#aae374',
             '#ff3838',
            
            
            
        ];
        
        // $color2= [
        // ,
        // ,
        // ];
        // dd($count);
        $usersChart = new UserChart;
        $usersChart->labels($name);
        $usersChart->dataset('Ứng tuyển', 'bar', $countb)->backgroundColor('#32a852')->color('#32a852');
        $usersChart->dataset('Trúng tuyển', 'bar', $counts)->backgroundColor('#201757')->color('#201757');
        return view('pages.admins.account.charts', [ 'usersChart' => $usersChart ] );
           
        
     
       
                        

    }
    public function drawlanguage(){
        $language = DB::table('languages')
        ->select('name_l',DB::raw('count(PostID) as countts'))
        ->groupBy('name_l')
        ->get()->toArray();
    //    dd($language);
    
        $count = [];
        $name = [];
        foreach($language as $data){
            $count[] = $data->countts;
            $name[] = $data->name_l;
        }
        
        $color = [
            '#2158e2',
            '#aae374',
             '#f23838',
             '#32a852',
             '#949c44',
             '#201757',
             '#1f3838',
             '#69a855',
             '#3339c44',
             '#669957'
            
        ];
        
        
        
        // dd($count);
        $usersChart = new UserChart;
        $usersChart->labels($name);
        $usersChart->dataset('Ngôn ngữ', 'pie', $count)->backgroundColor(collect($color))->color(collect($color));
        return view('pages.admins.account.charts_language', [ 'usersChart' => $usersChart ] );
           
        
     
       
                        

    }
    public function drawline(){
        $post = DB::table('posts')
        ->select('created_at',DB::raw('count(*) as countt'))
        ->groupBy(DB::raw("MONTH(created_at)"),DB::raw("YEAR(created_at)"))
        ->get()->toArray();
    //    dd($post);
    
        $count = [];
        $name = [];
        foreach($post as $data){
            $count[] = $data->countt;
            $name[] =  Carbon::parse($data->created_at)->format('Y-m-d'); ;
        }
        
        $color = [
            '#2158e2',
            // '#aae374',
            //  '#f23838',
            //  '#32a852',
            //  '#949c44',
            //  '#201757',
            //  '#1f3838',
            //  '#69a855',
            //  '#3339c44',
            //  '#669957'
            
        ];
        
        // dd($count);
        $usersChart = new UserChart;
        $usersChart->labels($name);
        $usersChart->dataset('Tổng bài đăng qua trong tháng', 'line', $count)
                    // ->backgroundColor(collect($color))
                    ->color(collect($color));
        return view('pages.admins.account.charts_line', [ 'usersChart' => $usersChart ] );
           
        
     
       
                        

    }
}
