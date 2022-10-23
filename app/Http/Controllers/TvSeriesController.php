<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\TvSeries;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\TvSeriesIntervals;
use Illuminate\Http\RedirectResponse;

class TvSeriesController extends Controller
{

    public object $series;

    public function __construct()
    {
        $this->series = TvSeries::groupBy('serie_id')->get();
    }

    /**
     * Returns next TV Series based on today's date and time
     *
     * @return View
     */
    public function index(): View
    {
        $today = Carbon::now();
        return view('nextontv', [
            'today' => $today,
            'nextOnTv' => TvSeriesIntervals::where('week_day', '>=', $today)->with('tvSerie')->first(),
            'series' => $this->series,
            'selectedSerie' => '',
        ]);
    }

    /**
     * Will return next selected TV Series
     *
     * @param Request $request serie id
     *
     * @return Redirect on empty serie
     * @return View whem serie is submited
     */
    public function nextontvform(Request $request): RedirectResponse | View
    {
        if($request->post('serie') == '') {
            return redirect()->route('nextontv');
        }

        $today = Carbon::now();
        $todayOnTv = TvSeriesIntervals::where('week_day', '>=', $today)
            ->where('id_tv_series', $request->post('serie'))
            ->with('tvSerie')->first();

        return view('nextontv', [
            'today' => $today,
            'nextOnTv' => $todayOnTv,
            'series' => $this->series,
            'selectedSerie' => $request->post('serie'),
        ]);
    }

    /**
     * Form to select the date when we want to see TV
     *
     * @return View
     */
    public function selectDate(): View
    {
        return view('selectdate', [
            'series' => $this->series,
        ]);
    }

    /**
     * Select a date and return the next tv show if no serie selected
     * Select a date and return the next selected tv show if serie selected
     *
     * @param Request $request date and or time and or serie
     *
     * @return View
     */
    public function tvseriesbydate(Request $request): View
    {
        $date = Carbon::parse($request->input('date'));
        $time = $request->input('time');

        $nextOnTv = $this->getSerie($date, $time);
        if (!$nextOnTv) {
            return view('ontvbydatenoshows', compact('nextOnTv', 'date', 'on', 'time'));
        }
        $on = Carbon::parse($nextOnTv->week_day);
        return view('ontvbydate', compact('nextOnTv', 'date', 'on', 'time'));
    }

    /**
     * Return next date interval with input time and date
     *
     * @param [type] $date
     * @param [type] $time
     * @return TvSeriesIntervals
     */
    private function getSerie($date, $time): TvSeriesIntervals
    {
        if ($time != '') {
            return TvSeriesIntervals::where('week_day', '>=', $date)->where('show_time', '>=', $time)->with('tvSerie')->first();
        }
        return TvSeriesIntervals::where('week_day', '>=', $date)->with('tvSerie')->first();
    }

}
