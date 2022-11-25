<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use Exception;
use Illuminate\Support\Facades\Hash;

class GenericController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('IsAdmin');
    }

    public function genrate_form($slug)
    {
        $body = '';
        if($slug == 'product'){
            $body .= '<form id="generic-form" class="submit-form" action="'.route('add.record',$slug).'" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Name</label>
                                    <input type="hidden" id="edit_id" name="edit_id">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-2" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" accept="image/*" name="image" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Stock</label>
                                    <input type="number" class="form-control" id="stock" name="stock" placeholder="stock" required>
                                </div>
                            </div>
                        </div>
                    </form>';
        }
        return $body;
    }

    public function genrate_table($slug)
    {
        $body = '';

        if($slug == 'product'){
            $table = 'App\Models\\' . $slug;
            $data = $table::where('is_active',1)->where('is_deleted',0)->get();
            $body .= '
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>No#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Creation date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>';
                    if(!$data->isEmpty()){
                        foreach($data as $key => $val){
                            
                            $body .= '<tr>
                                    <td>'.++$key.'</td>
                                    <td>'.$val->name.'</td>
                                    <td><img style="width:80px;height:80px;" src="'.asset($val->image).'"></td>
                                    <td>$'.$val->price.'</td>
                                    <td>$'.$val->stock.'</td>
                                    <td>'.date("M d,Y", strtotime($val->created_at)).'</td>
                                    <td>
                                        <button type="button" class="btn btn-primary editor-form fa fa-edit" data-id="'.$val->id.'" data-name='.$val->name.' data-price='.$val->price.' data-stock='.$val->stock.'></button>
                                        <button type="button" class="btn btn-danger delete-record fa fa-trash" data-id='.$val->id.' data-table='.$table.'></button>
                                    </td>
                                </tr>';
                        }
                    }

                    $body .='</tbody>
                    <tfoot>
                        <tr>
                            <th>No#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Creation date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>';

            $script = '$(document).on("click",".editor-form",function(){
                        $("#edit_id").val($(this).data("id"));
                        $("#name").val($(this).data("name"));
                        $("#price").val($(this).data("price"));
                        $("#stock").val($(this).data("stock"));
                        $("#image").removeAttr("required");
                        $(".add-data").text("Update");
                        $("#data-modal").modal("show");
                        
                    });';

            $data['body'] = $body;
            $data['script'] = $script;

            return $data;
        }

        return $body;
    }

    public function attribute($slug)
    {
        $form = '';
        $table = '';
        $form = $this->genrate_form($slug);
        $table = $this->genrate_table($slug);
        return view('admin.pages.curd',compact('form','table','slug'))->with('title',$slug);
    }

    public function image_upload($image)
    {
        $img["message"] = 'hello';
        $img["image"] = '';
        $img["status"] = 0;

        $extension=array("jpeg","jpg","png");

        $file = $image;
        $ext = $image->getClientOriginalExtension();
        if(in_array($ext,$extension)) {
            $file_name = $image->getClientOriginalName();
            $file_name = substr($file_name, 0, strpos($file_name, "."));
            $name = "uploads/product/" .$file_name."_".time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path().'/uploads/product/';
            $share = $image->move($destinationPath,$name);
            $img["image"] = $name;
            
        }
        return $img;
    }


    public function delete_record(Request $req)
    {
        $token_ignore = ['_token' => '' , 'table' => ''];
        $post_feilds = array_diff_key($_POST,$token_ignore);
        $post_feilds['is_active'] = 0;
        $post_feilds['is_deleted'] = 1;

        try{
            $data = $req->table::where('id',$req->id)->update($post_feilds);
            return response()->json(['message'=>'Record Deleted!', 'status'=> 1]);
        }catch(Exception $e){
            return response()->json(['error'=>$e->getMessage(), 'status'=> 0]);
        }

    }


    public function add_record(Request $req, $slug)
    {
        // return $req;
        $token_ignore = ['_token' => '' , 'edit_id' => '' , 'image' => ''];
        $post_feilds = array_diff_key($_POST,$token_ignore);

        $data = 'App\Models\\' . $slug;
        if (isset($req->image)) {
            $image = $this->image_upload($req->image);
            $post_feilds["image"] = $image["image"];
        }
        try {
            if (isset($_POST['edit_id']) && $_POST['edit_id'] != '') {
                $create = $data::where("id", $_POST['edit_id'])->update($post_feilds);
                $msg = "Record has been updated";
            } else {
                
                $create = $data::create($post_feilds);
                $msg = "Record has been created";
            }
            return redirect()->back()->with('message', $msg);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return redirect()->back()->with('error', "Error Code: " . $error);
        }

    }


    public function product()
    {
        $slug = 'product';
        $form = '';
        $table = '';
        $form = $this->genrate_form($slug);
        $table = $this->genrate_table($slug);
        return view('admin.pages.curd',compact('form','table','slug'))->with('title',$slug);
    }
}
