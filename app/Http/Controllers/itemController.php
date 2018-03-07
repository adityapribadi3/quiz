<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use App\category;

class itemController extends Controller
{
  public function getItems(){
    return item::all();
  }

  public function insertItems(Request $request){
    $data = new item();
    $data['category_id'] = $request->input('category_id');
    $data['name'] = $request->input('name');
    $data['price'] = $request->input('price');
    $data['stock'] = $request->input('stock');
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

  public function deleteItems(Request $request){
    item::where('id','=',$request->input('id'))->delete();
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

  public function updateItems(Request $request){
    try{
      $task = item::where('id','=',$request->input('id'))
              ->update(['category_id' => $request->input('category_id'),
                        'name' => $request->input('name'),
                        'price' => $request->input('price'),
                        'stock' => $request->input('stock')
                      ]);

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

  public function getItemJson($id){
    $json = category::with('items')->where('id',$id)->first();
      return $json;
  }
  public function getCategoryJson($id){
    $json = item::with('category')->where('id',$id)->first();
      return $json;
  }





}
