<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class productAssignmentController extends Controller
{
    
    public function assign(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $product = Product::findOrFail($request->product_id);

        $user->products()->attach($product->id);

        return response()->json(['message' => 'Exercise assigned successfully']);
    }

    public function getUserExercises($userId)
    {
        $user = User::findOrFail($userId);
        $assignments = $user->exercises()->get();

        return response()->json($assignments);
    }

}
