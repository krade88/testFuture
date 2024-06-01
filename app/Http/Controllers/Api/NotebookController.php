<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notebook;
use App\Http\Requests\NotebookRequest;
use App\Http\Resources\NotebookResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class NotebookController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $notebooks = Notebook::paginate(10);
        return NotebookResource::collection($notebooks);
    }

    public function store(NotebookRequest $request): JsonResponse
    {
        $notebook = Notebook::create($request->validated());
        return (new NotebookResource($notebook))->response()->setStatusCode(201);
    }

    public function show($id): JsonResponse
    {
        $notebook = Notebook::find($id);

        if (!$notebook) {
            return response()->json(['message' => 'Запись не найдена'], 404);
        }

        return (new NotebookResource($notebook))->response();
    }

    public function update(NotebookRequest $request, $id): JsonResponse
    {
        $notebook = Notebook::find($id);

        if (!$notebook) {
            return response()->json(['message' => 'Запись не найдена'], 404);
        }

        $notebook->update($request->validated());
        return (new NotebookResource($notebook))->response();
    }

    public function destroy($id): JsonResponse
    {
        $notebook = Notebook::find($id);

        if (!$notebook) {
            return response()->json(['message' => 'Запись не найдена'], 404);
        }

        $notebook->delete();
        return response()->json(['message' => 'Запись удалена'], 200);
    }
}
