<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class TicketController extends Controller
{
    private $ticketPrices = [
        'Cat1' => 2950000,
        'Cat2' => 2550000,
        'Cat3' => 1950000,
        'Cat4' => 1750000,
        'Cat5' => 1500000,
        'Cat6' => 1050000
    ];

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'seating_plan' => 'required|in:Cat1,Cat2,Cat3,Cat4,Cat5,Cat6',
            'ticket_quantity' => 'required|integer|min:1|max:10'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $seatingPlan = $request->input('seating_plan');
            $ticketQuantity = $request->input('ticket_quantity');
            
            if (!isset($this->ticketPrices[$seatingPlan])) {
                throw new \Exception("Invalid seating plan selected.");
            }
            
            $totalPrice = $this->ticketPrices[$seatingPlan] * $ticketQuantity;

            $reservation = Reservation::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'seating_plan' => $seatingPlan,
                'ticket_quantity' => $ticketQuantity,
                'total_price' => $totalPrice // Add this line
            ]);

            return redirect()->back()->with('success', [
                'message' => 'Reservation successful!',
                'details' => [
                    'id' => $reservation->id_ticket,
                    'name' => $reservation->first_name . ' ' . $reservation->last_name,
                    'seating' => $reservation->seating_plan,
                    'tickets' => $reservation->ticket_quantity,
                    'total_price' => $totalPrice
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Reservation Error: ' . $e->getMessage(), [
                'request' => $request->all(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->back()->with('error', 'Unable to process reservation. Please try again.');
        }
    }

    public function getPrices()
    {
        return response()->json($this->ticketPrices);
    }
}

