<?php namespace App\Http\Controllers;

use Input;
use Redirect;

use App\Catagory;
use App\Task;
//use App\Http\Requests\CatagoryRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;




class CatagoriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$catagories = Catagory::all();
        //$task=Task::find();
        $task=Task::all();
		//var_dump($task);
        //$catagory =Catagory::all();
		return view('catagories.index', compact('catagories','task'));
        //return view('catagories.index1', compact('catagories'));
        //return view('taskstodo.index', compact('catagories'));

        //return view('catagories.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$catagories = Catagory::all();



		return view('catagories.create', compact('catagories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CatagoryRequest $catagoryRequest)
	{
		//$this->validate($catagoryRequest, $this->rules);
		$input = Input::all();
		Catagory::create( $input );

		return Redirect::route('catagories.index')->with('message', 'Catagory created');
        //return Redirect::route('catagories.index1')->with('message', 'Catagory created');
        //return Redirect::route('taskstodo.index')->with('message', 'Catagory created');



    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Catagory $catagory)
	{
        $catagories = Catagory::all();
        //$task=Task::find();
        $task=Task::all();
        //var_dump($task);
        //return view('catagories.show', compact('catagory'));
        return view('catagories.show', compact('catagory','catagories','task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Catagory $catagory)

	{
		$catagories = Catagory::all();
		return view('catagories.edit', compact('catagory','catagories'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Catagory $catagory, Requests\CatagoryRequest $catagoryRequest)
	{
		//$this->validate($request, $this->rules);
		$input = array_except(Input::all(), '_method');
		$catagory->update($input);

		return Redirect::route('catagories.index', $catagory->id)->with('message', 'Catagory updated.');
        //return Redirect::route('catagories.index1', $catagory->id)->with('message', 'Catagory updated.');
        //return Redirect::route('taskstodo.index', $catagory->id)->with('message', 'Catagory updated.');



    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Catagory $catagory)
	{
		$catagory->delete();

		return Redirect::route('catagories.index')->with('message', 'Catagory deleted.');
        //return Redirect::route('catagories.index1')->with('message', 'Catagory deleted.');
        //return Redirect::route('taskstodo.index')->with('message', 'Catagory deleted.');


    }

}