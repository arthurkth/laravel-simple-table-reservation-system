<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator as PaginationPaginator;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['tables' => Table::all()]);
    }

    public function myReservations()
    {
        $userReservations = Reservation::where('id_user', '=', Auth::user()->id)->paginate(10);

        return view('my-reservations', ['reservations' => $userReservations]);
    }
}
