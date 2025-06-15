<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Request as RequestModel;
use App\Models\RequestItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'divisions_id' => 'required|exists:divisions,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'divisions_id' => $request->divisions_id,
        ]);

        $token = $user->createToken('API Token')->accessToken;

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully',
            'data' => [
                'user' => array_merge($user->only(['id', 'name', 'email', 'divisions_id']),
                    ['division_name' => optional($user->division)->name]
                ),
                'token' => $token,
                'token_type' => 'Bearer'
            ]
        ], 201);
    }

    public function login(Request $request): JsonResponse
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        $token = $user->createToken('API Token')->accessToken;

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'data' => [
                'user' => $user->only(['id', 'name', 'email']),
                'token' => $token,
                'token_type' => 'Bearer'
            ]
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->token()->revoke();

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully'
        ]);
    }


    public function profile(Request $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'user' => $request->user()->only(['id', 'name', 'email', 'created_at'])
            ]
        ]);
    }

    public function topDivisonRequest(): JsonResponse
    {
        try {
            $requests = RequestModel::get();

            $grouped = $requests->groupBy(function ($req) {
                return Carbon::parse($req->created_at)->format('Y-m');
            });

            $topDivisions = $grouped->map(function ($items, $month) {
                return $items->groupBy(function ($item) {
                    return $item->user->division->name;
                })
                ->map(function ($divisionItems) {
                    return $divisionItems->count();
                })
                ->sortDesc()
                ->take(1)
                ->map(function ($count, $division) use ($month) {
                    return [
                        'bulan' => $month,
                        'divisi' => $division,
                        'jumlah_permintaan' => $count
                    ];
                })
                ->values()
                ->first();
            })->filter()->values();

            return response()->json([
                'success' => true,
                'data' => $topDivisions
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function topItem(): JsonResponse
    {
        try {
            $items = RequestItem::get()
                ->groupBy('item_id')
                ->map(function ($items, $itemId) {
                    return [
                        'item_id' => $itemId,
                        'nama_item' => optional($items->first()->item)->item_name,
                        'total_permintaan' => $items->count(),
                        'total_quantity' => $items->sum('quantity'),
                    ];
                })
                ->sortByDesc('total_permintaan')
                ->values();

            return response()->json([
                'success' => true,
                'data' => $items
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }
}
