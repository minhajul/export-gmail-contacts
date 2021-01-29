<?php

use Illuminate\Support\Facades\Route;
use Minhajul\ExportGmailContacts\Http\Controllers\ExportGmailContactsController;

Route::get('export/google/contacts', [ExportGmailContactsController::class, 'handle']);
Route::get(config('exportGmailContacts.google_callback_url'), [ExportGmailContactsController::class, 'handleProviderCallback']);