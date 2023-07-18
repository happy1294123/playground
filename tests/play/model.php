<?php
// model 練習和筆記
use App\Models\Test;

// query
Test::all(); // find all
Test::where('active', 1)  // filter orderBy limit
        ->orderBy('name')
        ->take(10)
        ->get();

        