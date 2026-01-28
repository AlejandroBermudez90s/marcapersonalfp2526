<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\IdiomaResource;
use App\Models\Idioma;
use App\Models\User;
use Illuminate\Http\Request;

class UserIdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, User $user)
    {
        $query = $user->idiomas();

        if ($request) {
            $query->where(function ($q) use ($request) {
                $q->orWhere('english_name', 'like', '%' . $request->q . '%')
                    ->orWhere('native_name', 'like', '%' . $request->q . '%');
            });
        }

        return IdiomaResource::collection(
            $query->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $idioma = json_decode($request->getContent(), true);
        $idioma = $user->idiomas()->create($idioma);

        return new IdiomaResource($idioma);
    }

    /**
     * Display the specified resource.
     */
    public function show(Idioma $idioma, User $user)
    {
        return new IdiomaResource($idioma);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idioma $idioma, User $user)
    {
        $idiomaData = json_decode($request->getContent(), true);
        $idioma->update($idiomaData);

        return new IdiomaResource($idioma);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idioma $idioma, User $user)
    {
        try {
            $idioma->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
