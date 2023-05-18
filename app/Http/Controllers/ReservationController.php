<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create(Request $request)
    {
        $isAvailable = $this->tableIsAvailable($request->date, $request->hour, $request->table);
        if ($isAvailable) {
            Reservation::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'date' => implode("-", array_reverse(explode("/", $request->date))),
                'hour' => $request->hour,
                'escorts' => $request->escorts,
                'id_table' => $request->table,
                'id_user' => Auth::user()->id
            ]);
            return response()->json(['success'=> 'Reserva criada com sucesso!']);
        } else {
            return response()->json(['danger'=> 'Que pena. Alguém já reservou a mesa nesse horário!']);
        }
    }

    private function tableIsAvailable($date, $hour, $table)
    {
        $data = Reservation::where([['date', '=', $date], ['hour', '=', $hour], ['id_table','=', $table]])->get();
        return $data->isEmpty()? true: false;
    }
    
}
