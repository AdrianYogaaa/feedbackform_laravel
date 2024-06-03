<?php

use App\Http\Controllers\FeedbackController;

Route::get('/feedback', [FeedbackController::class, 'create']);
Route::post('/feedback', [FeedbackController::class, 'store']);
