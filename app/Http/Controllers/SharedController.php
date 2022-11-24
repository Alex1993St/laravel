<?php

namespace App\Http\Controllers;

use App\Http\Requests\SharedRequest;
use App\Jobs\SendSharedJob;

class SharedController extends Controller
{
    public function shared(SharedRequest $request)
    {
        SendSharedJob::dispatch($request->validated());
        return redirect()->route('quote.index')->with(['message' => __('цитату буде надіслано.')]);
    }
}
