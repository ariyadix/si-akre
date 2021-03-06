<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Mahasiswa;

use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (Auth::user()->level == 1) {
            if ($request->ajax()) {
                return Datatables::of(DB::table('audits')->latest()->take(5)->get())
                    ->addColumn('user', function ($audit) {
                        $user = DB::table('users')->where('id', '=', $audit->user_id)->first();
                        return  $user->username;
                    })
                    ->addColumn('log_event', function ($audit) {
                        $badge = '<span class=" badge rounded-pill '
                            . (($audit->event == 'created') ? ' bg-green '  : ($audit->event == 'deleted' ? ' bg-red ' : ($audit->event == 'updated' ? ' bg-yellow ' : '')))
                            . '">' . $audit->event . '</span>';
                        return  $badge;
                    })
                    ->addColumn('action', function ($audit) {
                        $btn = '
                    <a class="btn btn-info" href="/audit-log/' . $audit->id . '"><i class="fas fa-info-circle"></i> Detail</a>                    ';
                        return $btn;
                    })
                    ->rawColumns(['log_event', 'action'])
                    ->toJson();
            }

            $data = [
                'prodi' => Prodi::get(),
            ];
            return view('admin.dashboard', $data);
        } elseif (Auth::user()->level == 2) {
            $id_user = auth()->user()->prodi_id;

            $data = Prodi::find($id_user);
            $isComplete = true;
            foreach ($data->toArray() as $key => $value) {
                if (!($key == 'created_at' || $key == 'updated_at')) {
                    if ($value == NULL) {
                        $isComplete = false;
                    }
                }
            }
            $prodi = new Prodi;
            $data = [
                'isComplete' => $isComplete,
                'prodi' => Prodi::find($id_user),
            ];

            return view('admin_prodi.dashboard', $data);
        } elseif (Auth::user()->level == 3) {
            $id_user = auth()->user()->dosen_id;

            $data = Dosen::find($id_user);
            $isComplete = true;
            foreach ($data->toArray() as $key => $value) {
                if (!($key == 'created_at' || $key == 'updated_at')) {
                    if ($value == NULL) {
                        $isComplete = false;
                    }
                }
            }
            $prodi = new Dosen;
            $data = [
                'isComplete' => $isComplete
            ];

            return view('dosen.dashboard', $data);
        } elseif (Auth::user()->level == 4) {
            $id_user = auth()->user()->mhs_id;

            $data = Mahasiswa::find($id_user);
            $isComplete = true;
            foreach ($data->toArray() as $key => $value) {
                if (!($key == 'created_at' || $key == 'updated_at')) {
                    if ($value == NULL) {
                        $isComplete = false;
                    }
                }
            }
            $prodi = new Mahasiswa;
            $data = [
                'isComplete' => $isComplete
            ];

            return view('mhs.dashboard', $data);
        }
    }
}
