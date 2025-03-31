<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToText\Pdf;

class PDFController extends Controller
{
    public function index(Request $request)
    {
        return view("pdf");
    }
    public function store(Request $request)
    {
        $file = $request->file('file');
        $text = (new Pdf())
        ->setPdf($file)
        ->text();
dd($text);
//  $posicao = strpos($text, "Nome");
//   if ($posicao !== false) {
//       $textoAposPalavra = substr($text, $posicao + strlen("Nome"));
//       $palavras = explode(' ', $textoAposPalavra);
//         dd(array_slice($palavras, 0, 3)); 
       // }
      }
  }
