<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterecipeRequest;
use App\Http\Requests\UpdaterecipeRequest;
use App\Repositories\recipeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class recipeController extends AppBaseController
{
    /** @var  recipeRepository */
    private $recipeRepository;

    public function __construct(recipeRepository $recipeRepo)
    {
        $this->recipeRepository = $recipeRepo;
    }

    /**
     * Display a listing of the recipe.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $recipes = $this->recipeRepository->all();

        return view('recipes.index')
            ->with('recipes', $recipes);
    }

    /**
     * Show the form for creating a new recipe.
     *
     * @return Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created recipe in storage.
     *
     * @param CreaterecipeRequest $request
     *
     * @return Response
     */
    public function store(CreaterecipeRequest $request)
    {
        $input = $request->all();

        $recipe = $this->recipeRepository->create($input);

        Flash::success('Recipe saved successfully.');

        return redirect(route('recipes.index'));
    }

    /**
     * Display the specified recipe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $recipe = $this->recipeRepository->find($id);

        if (empty($recipe)) {
            Flash::error('Recipe not found');

            return redirect(route('recipes.index'));
        }

        return view('recipes.show')->with('recipe', $recipe);
    }

    /**
     * Show the form for editing the specified recipe.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $recipe = $this->recipeRepository->find($id);

        if (empty($recipe)) {
            Flash::error('Recipe not found');

            return redirect(route('recipes.index'));
        }

        return view('recipes.edit')->with('recipe', $recipe);
    }

    /**
     * Update the specified recipe in storage.
     *
     * @param int $id
     * @param UpdaterecipeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterecipeRequest $request)
    {
        $recipe = $this->recipeRepository->find($id);

        if (empty($recipe)) {
            Flash::error('Recipe not found');

            return redirect(route('recipes.index'));
        }

        $recipe = $this->recipeRepository->update($request->all(), $id);

        Flash::success('Recipe updated successfully.');

        return redirect(route('recipes.index'));
    }

    /**
     * Remove the specified recipe from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $recipe = $this->recipeRepository->find($id);

        if (empty($recipe)) {
            Flash::error('Recipe not found');

            return redirect(route('recipes.index'));
        }

        $this->recipeRepository->delete($id);

        Flash::success('Recipe deleted successfully.');

        return redirect(route('recipes.index'));
    }
}
