<?php

namespace App\Http\Controllers;

use App\History;
use App\Http\Controllers\AdminController as Controller;
use App\Http\Requests\StoreHistory;
use App\Http\Requests\UpdateHistory;

class HistoryController extends Controller
{
    public function __construct(History $history)
    {
        $this->model = $history;
        $this->route = 'histories';
        $this->title = 'histories';

        $this->table_attributes = [
            "query" => "text",

        ];

        $this->attributes = [
            "query" => "text",

        ];

        $this->storeRequest = new StoreHistory();
        $this->updateRequest = new UpdateHistory();

        parent::__construct();
    }
}
