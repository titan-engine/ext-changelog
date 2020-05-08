<?php
namespace Extensions\Ian\Changelog\Http\Controllers;

use App\Http\Controllers\Controller;
use Extensions\Ian\Changelog\Database\Models\Changelog;
use Extensions\Ian\Changelog\Http\Requests\CreateEntryRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller {

    public function index(): View {
        $items = Changelog::paginate(15);

        return view('ian.changelog::admin.index', compact('items'));
    }

    public function create(): View {
        return view('ian.changelog::admin.create');
    }

    public function store(CreateEntryRequest $request): RedirectResponse {
        $entry = new Changelog();
        $entry->title = $request->input('title');
        $entry->content = clean($request->input('content'));
        $entry->author_id = auth()->user()->id;
        $entry->save();

        flash("Entry saved")->success();

        return redirect()->back();
    }

    public function edit(Changelog $changelog): View {
        return view('ian.changelog::admin.edit', compact('changelog'));
    }

    public function update(CreateEntryRequest $request, Changelog $changelog): RedirectResponse {
        $changelog->title = $request->title;
        $changelog->content = clean($request->input('content'));
        $changelog->save();

        flash("Entry has been updated!")->success();

        return redirect()->back();
    }

    public function delete(Changelog $changelog): RedirectResponse {
//        $changelog->delete();
        flash('Entry deleted')->success();

        return redirect()->back();
    }

}
