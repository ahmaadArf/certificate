<?php

namespace App\Http\Controllers\Api;

use App\Models\FormTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormTemplateController extends Controller
{
    public function index()
    {
        $user = authUser('sanctum');
        $templates = FormTemplate::where('user_id',$user->id)
        ->with('form')
        ->select('id','name','form_id','user_id','default')
        ->get();
        return responseJson(true, 'list of all templates', $templates);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'form_id' =>  ['required', 'exists:forms,id'],
            'data' =>  ['required']
        ]);

        $user = authUser('sanctum');
        $template = FormTemplate::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'form_id' => $request->form_id,
            'data' => $request->data
        ]);

        return responseJson(true, 'success created template', $template);
    }

    public function show($id){
        $user = authUser('sanctum');
        $template = FormTemplate::where('user_id',$user->id)
        ->with('form')
        ->findOrFail($id);
        return responseJson(true, 'data of template', $template);
    }

    public function update($id, Request $request){
        $request->validate([
            'data' =>  ['required']
        ]);

        $user = authUser('sanctum');
        $template = FormTemplate::where('user_id',$user->id)->findOrFail($id);


        $template->update([
            'data' => $request->data
        ]);
        return responseJson(true, 'success update template', $template);
    }

    public function makeDefault($id){
        $user = authUser('sanctum');
        $template = FormTemplate::where('user_id',$user->id)->findOrFail($id);

        FormTemplate::where([
            'user_id'=> $user->id,
            'form_id' => $template->form_id
        ])->update(['default' => 'no']);

        $template->update(['default' => 'yes']);
        return responseJson(true, 'success mark template as a default ', $template);
    }

    public function destroy($id){

        $user = authUser('sanctum');
        $template = FormTemplate::where('user_id',$user->id)->findOrFail($id);
        $template->delete();

        return responseJson(true, 'success deleted template', []);
    }
}
