<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Resources\V1\TicketResource;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TicketResource::collection(Ticket::where('deleted',0)->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new Ticket($request->all());
        $ticket->save();
        return new TicketResource($ticket);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        return new TicketResource($ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        $tickets = Ticket::find($ticket)->first();
        $tickets->fill($request->all());
        $tickets->save();
        return new TicketResource($tickets);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        $ticket->deleted = 1;
        if($ticket->update())
        {
            return response()->json([
                'message' => 'Success'
            ],200);
        }
        return response()->json([
            'message' => 'Not found'
        ],404);
    }

    public function reconstruct(ticket $ticket)
    {
        $ticket->deleted = 0;
        if($ticket->update())
        {
            return response()->json([
                'message' => 'Success'
            ],200);
        }
        return response()->json([
            'message' => 'Not found'
        ],404);
    }
}
