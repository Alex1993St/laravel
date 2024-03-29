<?php

namespace App\Http\Controllers;

use App\Action\QuoteCreateAction;
use App\Action\QuoteUpdateAction;
use App\DTO\QuoteData;
use App\Http\Requests\QuoteRequest;
use App\Http\Resources\QuoteResource;
use App\Http\Resources\SocialResource;
use App\Models\Quote;
use App\Models\Social;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = QuoteResource::collection(Quote::paginate(25));
        $socials = SocialResource::collection(Social::get());

        return view('quote.index', compact('quotes', 'socials'));
    }

    public function create()
    {
        return view('quote.create');
    }

    public function store(QuoteRequest $request, QuoteCreateAction $action)
    {
        $action(QuoteData::formRequest($request));

        return redirect()->route('quote.index');
    }


    public function edit(Quote $quote)
    {
        return view('quote.edit', compact('quote'));
    }

    public function update(QuoteRequest $request, Quote $quote, QuoteUpdateAction $action)
    {
        $action($quote, QuoteData::formRequest($request));

        return redirect()->route('quote.index');
    }
}
