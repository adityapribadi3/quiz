<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categoryController extends Controller
{
  public function getCategory(){
    return category::all();
  }

  public function insertCategory(Request $request){
    $data = new category();
    $data['name'] = $request->input('name');
    $data->save();

    if($task==0){
      return response([
        'msg'=>'fail'
      ],400);
    }else{
      return response([
        'msg'=>'success'
      ],200);
    }
  }catch(Exception $error){
    return response([
      'msg'=>'fail'
    ],400);
  }
  }

  public function deleteCategory(Request $request){
    category::where('id','=',$request->input('id'))->delete();

    if($task==0){
      return response([
        'msg'=>'fail'
      ],400);
    }else{
      return response([
        'msg'=>'success'
      ],200);
    }
  }catch(Exception $error){
    return response([
      'msg'=>'fail'
    ],400);
  }
  }

  public function updateCategory(Request $request){
    category::where('id','=',$request->input('id'))
            ->update(['name' => $request->input('name')]);

            if($task==0){
              return response([
                'msg'=>'fail'
              ],400);
            }else{
              return response([
                'msg'=>'success'
              ],200);
            }
          }catch(Exception $error){
            return response([
              'msg'=>'fail'
            ],400);
          }
}
