<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // Time Work Type
    Route::apiResource('time-work-types', 'TimeWorkTypeApiController');

    // Time Project
    Route::apiResource('time-projects', 'TimeProjectApiController');

    // Time Entry
    Route::apiResource('time-entries', 'TimeEntryApiController');

    // Expense Category
    Route::apiResource('expense-categories', 'ExpenseCategoryApiController');

    // Income Category
    Route::apiResource('income-categories', 'IncomeCategoryApiController');

    // Expense
    Route::apiResource('expenses', 'ExpenseApiController');

    // Income
    Route::apiResource('incomes', 'IncomeApiController');

    // Currency
    Route::apiResource('currencies', 'CurrencyApiController');

    // Transaction Type
    Route::apiResource('transaction-types', 'TransactionTypeApiController');

    // Income Source
    Route::apiResource('income-sources', 'IncomeSourceApiController');

    // Client Status
    Route::apiResource('client-statuses', 'ClientStatusApiController');

    // Project Status
    Route::apiResource('project-statuses', 'ProjectStatusApiController');

    // Client
    Route::apiResource('clients', 'ClientApiController');

    // Project
    Route::apiResource('projects', 'ProjectApiController');

    // Note
    Route::apiResource('notes', 'NoteApiController');

    // Document
    Route::post('documents/media', 'DocumentApiController@storeMedia')->name('documents.storeMedia');
    Route::apiResource('documents', 'DocumentApiController');

    // Transaction
    Route::apiResource('transactions', 'TransactionApiController');

    // Contact Company
    Route::apiResource('contact-companies', 'ContactCompanyApiController');

    // Contact Contacts
    Route::apiResource('contact-contacts', 'ContactContactsApiController');

    // Task Status
    Route::apiResource('task-statuses', 'TaskStatusApiController');

    // Task Tag
    Route::apiResource('task-tags', 'TaskTagApiController');

    // Task
    Route::post('tasks/media', 'TaskApiController@storeMedia')->name('tasks.storeMedia');
    Route::apiResource('tasks', 'TaskApiController');
});
