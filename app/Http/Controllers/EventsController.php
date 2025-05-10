<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventsController extends Controller
{
    public function show(Event $event)
    {
        return Inertia::render('Event/show', [
            'event' => $event->only(
                'id',
                'name',
                'mobile',
            ),
        ]);
    }
}
