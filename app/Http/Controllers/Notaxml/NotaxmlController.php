<?php

namespace App\Http\Controllers\Notaxml;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nota;
use Illuminate\Support\Facades\File;

class NotaxmlController extends Controller
{

    public function create()
    {
        return view('notasxml.create');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('invoice'));


        $data = $request->except('invoice');

        if ($request->invoice) {

            $data['invoice'] = $request->invoice->store('notas');
        }

        Nota::create($data);

        return redirect()->route('notasxml.create');
    }

    /**
     * Display the specified resource.
     */
  

    

public function show($id)
{
    // Recupere a nota com base no ID
    $nota = Nota::find($id);

    // Construa o caminho completo do arquivo XML usando storage_path
    $xmlPath = storage_path('app/public/'.$nota->invoice);


    // dd($xmlPath);

    // /Verifique se o arquivo existe
    if (File::exists($xmlPath)) {
        // Carregue o conteúdo do arquivo XML
        $xmlContent = file_get_contents($xmlPath);

        // Use a biblioteca SimpleXML para analisar o XML
        $xml = simplexml_load_string($xmlContent);

        return view('notasxml.show', ['xml' => $xml]);
    } else {
        // Lide com a situação em que o arquivo não existe
        dd("O arquivo não existe para a nota com ID $id");
    }
}



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
