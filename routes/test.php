<?php
use App\Enums\EnumVoteType;
use Illuminate\Support\Facades\Route;
Route::get('/enum',function(){
    return EnumVoteType::getValues();
});