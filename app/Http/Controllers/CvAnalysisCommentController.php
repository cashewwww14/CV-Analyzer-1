<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CvAnalysis;

class CvAnalysisCommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string|max:2000'
        ]);

        $cv = CvAnalysis::findOrFail($id);

        // authorize: only owner or admin can comment/edit
        if (auth()->id() !== $cv->user_id && auth()->user()->role !== 'admin') {
            abort(403);
        }

        $cv->comment = $request->input('comment');
        $cv->save();

        return back()->with('success', 'Komentar berhasil disimpan.');
    }
}
