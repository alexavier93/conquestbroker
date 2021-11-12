<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Diferencial;
use App\Models\Imovel;
use App\Models\ImovelImage;
use App\Models\ImovelPlanta;
use App\Models\ImovelStatus;
use App\Models\Status;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImovelController extends Controller
{

    private $imovel;

    public function __construct(Imovel $imovel)
    {
        $this->imovel = $imovel;
    }

    public function index()
    {

        $imoveis = DB::table('imoveis')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->where('imoveis.status', '=', '1')
            ->where('imoveis.view_home', '=', '1')
            ->select('imoveis.*', 'categorias.nome as categoriaNome', 'categorias.slug as categoriaSlug')
            ->orderBy('id', 'desc')
            ->paginate(12);

        $categorias = Categoria::all();
        $tipos = Tipo::all();

        return view('imoveis.index', compact('imoveis', 'categorias', 'tipos'));
    }

    public function info($slug)
    {

        $imovel = $this->imovel->where('slug', $slug)->firstOrFail();

        $categorias = Categoria::all();
        $diferenciais = Diferencial::all();
        $status = Status::all();
        $statusProgresso = ImovelStatus::where('imovel_id', $imovel->id)->get();

        $images = $imovel->imagens()->get();
        $plantas = $imovel->plantas()->get();

        return view('imoveis.info', compact('imovel', 'categorias', 'diferenciais', 'status', 'images', 'plantas', 'statusProgresso'));
    }


    public function busca(Request $request)
    {

        $categoria = $request->input('categoria');
        $tipo = $request->input('tipo');

        $categoria = Categoria::where('slug', $categoria)->first();
        $tipo = Tipo::where('slug', $tipo)->first();

        $query = DB::table('imoveis')
            ->leftJoin('categorias', 'categorias.id', '=', 'imoveis.categoria_id')
            ->where('imoveis.status', '=', '1')
            ->where('imoveis.view_home', '=', '1');

            if ($request->input('categoria')) {
                $query = $query->where('categoria_id', $categoria->id);
            }

            if ($request->input('tipo')) {
                $query = $query->where('tipo_id', $tipo->id);
            }

            $imoveis = $query->select('imoveis.*', 'categorias.nome as categoriaNome', 'categorias.slug as categoriaSlug')
            ->orderBy('id', 'desc')
            ->paginate(12);



        $categorias = Categoria::all();
        $tipos = Tipo::all();

        return view('imoveis.busca', compact('imoveis', 'categorias', 'tipos'));

    }

}
