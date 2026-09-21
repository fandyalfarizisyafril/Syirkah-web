<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InquiryController extends Controller
{
    public function create(Request $request)
    {
        return view('inquiry', [
            'company' => config('company'),
            'products' => config('company.products'),
            'selectedProduct' => $request->query('product'),
            'title' => 'Request Inquiry',
            'description' => 'Ajukan permintaan produk atau konsultasi teknis kepada PT. Syirkah Mandiri Artomoro.',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'company' => ['required', 'string', 'max:160'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['required', 'string', 'max:40'],
            'product' => ['required', 'string', 'max:160'],
            'requirement' => ['required', 'string', 'max:160'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
            'website' => ['nullable', 'prohibited'],
        ]);

        $payload = [
            'submitted_at' => now()->toIso8601String(),
            'ip' => $request->ip(),
            'user_agent' => Str::limit((string) $request->userAgent(), 255, ''),
            'data' => $validated,
        ];

        $fileName = 'inquiries/'.now()->format('Ymd_His').'_'.Str::random(8).'.json';

        Storage::disk('local')->put($fileName, json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        return redirect()
            ->route('inquiry.create')
            ->with('status', 'Permintaan Anda sudah tercatat. Tim PT. Syirkah Mandiri Artomoro akan menindaklanjuti melalui kontak yang dikirim.');
    }
}
