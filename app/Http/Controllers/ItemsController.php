<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class ItemsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index () {
        
        $items = Item::paginate(10);
        
        
        return view('items.index')        
            ->with('items', $items);
    }

    public function create() {
        return view('items.create');
    }

    public function store(Request $request) 
    {

        $item = $request->all();

        $user = Auth::user();

        if ($user->is_admin) {
            $item['approved'] = True;
        }
        
            Item::create($item);

            return to_route('items.index');
    }

    public function approve(Item $item)
    {
        $item->approved = True;

        $item->save();

        return to_route('items.index');
    }    

    public function destroy(Item $item)
    {
        $item->delete();

        return to_route('items.index');
    }

}
