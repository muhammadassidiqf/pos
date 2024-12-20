<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:role']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Roles';
        $permission = Permission::get(['id', 'name', 'created_at']);
        return view('pages.roles', compact('title', 'permission'));
    }

    public function list()
    {
        $data = Role::with('permissions')->get(['id', 'name', 'created_at']);
        if (request()->ajax()) {
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($data) {
                    return $data->name;
                })
                ->editColumn('waktu', function ($data) {
                    return Carbon::parse($data->created_at)->translatedFormat('d F Y');
                })
                ->editColumn('permission', function ($data) {
                    // $per = implode(', ', $data->permissions->pluck('name')->toArray());
                    $per = '';
                    foreach ($data->permissions as $value) {
                        $per .= '<span class="badge badge-light-primary fs-7 m-1">' . ucfirst($value->name) . '</span>';
                    }
                    return $per;
                })
                ->editColumn('aksi', function ($data) {
                    $edit = route('roles.edit', encrypt($data->id));
                    return '
                        <button type="button" data-bs-toggle="modal" data-bs-target="#edit_roles_modal" data-remote="' . $edit . '"
                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3"
                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                        fill="black" />
                                    <path
                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </button>
                        <button type="button"
                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" data-kt-users-table-filter="delete_row" data-email="' . $data->email . '" data-id="' . encrypt($data->id) . '">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                        fill="black" />
                                    <path opacity="0.5"
                                        d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                        fill="black" />
                                    <path opacity="0.5"
                                        d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                        fill="black" />
                                </svg>
                            </span>
                        </button>
                        ';
                })
                ->rawColumns(['aksi', 'permission'])
                ->make(true);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $permissions = Permission::whereIn('id', $request->permission)->pluck('id', 'id');
            $role = Role::create(['name' => $request->name]);
            $role->syncPermissions($permissions);
            DB::commit();
            return redirect()->route('roles')->with('success', "Roles has been successfully added!");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('roles')->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Role::with('permissions')->where('id', decrypt($id))->first();
        $selectedPermission = $data->permissions->pluck('id')->toArray();
        $permission = Permission::get(['id', 'name', 'created_at']);
        return view('pages.edit-roles', compact('data', 'permission', 'selectedPermission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $permissions = Permission::whereIn('id', $request->permission)->pluck('id', 'id');
            $role = Role::find(decrypt($id));
            $role->name = $request->name;
            $role->syncPermissions($permissions);
            $role->save();
            DB::commit();
            return redirect()->route('roles')->with('success', "Roles has been successfully updated!");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('roles')->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
