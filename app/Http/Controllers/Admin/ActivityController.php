<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();

        return view('admin.activities.index', compact('activities'));
    }

    public function create()
    {
        return view('admin.activities.create');
    }

    public function store(CreateActivityRequest $request)
    {
        $activity = Activity::create($request->validated());

        $this->clearActivityCache();

        return redirect()->route('activities.index');
    }

    public function show(Activity $activity)
    {
        return view('admin.activities.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        return view('admin.activities.edit', compact('activity'));
    }

    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $activity->update($request->validated());

        if ($request->hasFile('image')) {
            $activity->addMediaFromRequest('image')->toMediaCollection('images');
        }

        $this->clearActivityCache();

        session()->flash('success', 'Update of <strong>'.$activity->title.'</strong> has been saved');

        return redirect()->route('activities.index');
    }

    public function destroy(Activity $activity)
    {
        //To be implement by students
    }

    private function clearActivityCache()
    {
        cache()->forget('welcome_upcoming');
        cache()->forget('welcome_past');

        cache()->forget('activities_all');
    }
}
