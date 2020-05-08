<?php
namespace Extensions\Ian\Changelog\Http\Controllers;

use App\Http\Controllers\Controller;
use Extensions\Ian\Changelog\Database\Models\Changelog;
use Illuminate\View\View;

class FrontController extends Controller {

    public function index(): View {
        return view('ian.changelog::index');
    }

    public function show(Changelog $changelog): View {
        return view('ian.changelog::show', compact('changelog'));
    }

}
