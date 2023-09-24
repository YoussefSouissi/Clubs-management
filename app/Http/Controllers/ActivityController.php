<?php

namespace App\Http\Controllers;

use App\Models\activity;
use App\Models\club;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class ActivityController extends Controller
{
    public function addActivity(Request $request, $clubId)
    {

        $club = Club::findOrFail($clubId);

        $validatedData = $request->validate([
            'title' => 'required|string',
            'activity_type' => 'required|string',
            'date' => 'required|date',
            'description' => 'required|string',
            'image' => 'required|image',
            'form_link' => 'required|url',
        ]);


        $imagePath = $request->file('image')->store('activity_images', 'public');

        $activity = new Activity([
            'title' => $validatedData['title'],
            'activity_type' => $validatedData['activity_type'],
            'date' => $validatedData['date'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
            'form_link' => $validatedData['form_link'],
        ]);

        $club->activities()->save($activity);


        return response()->json([
            'message' => 'Activity created successfully',
            'code' => 200
        ]);
    }

    public function deleteActivity($clubId, $activityId)
    {
        try {

            $club = Club::findOrFail($clubId);

            $activity = $club->activities()->findOrFail($activityId);

            $activity->delete();


            return response()->json([
                'message' => 'Activity deleted successfully',

            ]);
        } catch (ModelNotFoundException $exception) {

            return response()->json([
                'message' => 'Club or activity not found',
                'code' => 404
            ]);
        }
    }

    public function showActivity($clubId)
    {
        try {

            $club = Club::findOrFail($clubId);

            $activities = $club->activities;

            return response()->json($activities);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Club not found'], 404);
        }
    }

    public function updateActivity(Request $request, $clubId, $id)
    {
        $club = Club::findOrFail($clubId);
        $activity = $club->activities()->findOrFail($id);
        try {
            $activityData = $request->only(['title', 'activity_type', 'date', 'description', 'form_link']);
            $activity->fill($activityData);
            if ($request->hasFile('image')) {
                Storage::disk('public')->delete($activity->image);
                $imagePath = $request->file('image')->store('activity_images', 'public');
                $activity->image = $imagePath;
            }
            $activity->save();
            return response()->json([
                'message' => 'Activity updated successfully',
                'activity' => $activity 
            ], 200);
        } catch (ModelNotFoundException $exception) {
            return response()->json([
                'error' => 'Club or activity not found'
            ], 404);
        } catch (\Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage()
            ], 400);
        }
    }

    public function countFormation($clubId)
    {
        try {

            $club = Club::findOrFail($clubId);
            $count = $club->activities()->where('activity_type', 'formation')->count();

            return response()->json($count);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'No activity found'
            ], 404);
        }
    }
    public function countWorkshop($clubId)
    {
        try {

            $club = Club::findOrFail($clubId);
            $count = $club->activities()->where('activity_type', 'workshop')->count();

            return response()->json($count);
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'No activity found'
            ], 404);
        }
    }
}