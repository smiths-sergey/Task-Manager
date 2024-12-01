<?php

namespace App\Http\Controllers;

use App\Services\SoapService;
use Illuminate\Http\Request;

class SoapController extends Controller
{
    private $soapService;

    public function __construct()
    {
        $this->soapService = new SoapService();
    }


    public function index()
    {
        return view('index');
    }


    public function handleRequest(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|integer|min:1',
        ]);

        try {
            $number = (int) $validated['number'];
            $result = $this->soapService->numberToWords($number);

            return view('index', [
                'result' => $result,
                'number' => $number
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Ошибка запроса: ' . $e->getMessage());
        }
    }
}
