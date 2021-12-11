<?php

    namespace App\Http\Livewire\Admin\InstituteCalendar;

    use App\Models\InstituteCalendar;
    use Asantibanez\LivewireCalendar\LivewireCalendar;
    use Carbon\Carbon;
    use Illuminate\Support\Collection;

    class Index extends LivewireCalendar {

        public $showModal = false;
        public $event
            = [
                'title'             => '',
                'short_description' => '',
                'long_description'  => '',
                'event_date'        => '',
            ];

        public function showModal()
        {
            $this->showModal = true;
        }

        public function submit()
        {

            InstituteCalendar::create($this->event);
            $this->event     = [
                'title'             => '',
                'short_description' => '',
                'long_description'  => '',
                'event_date'        => '',
            ];
            $this->showModal = false;
        }

        public function events(): Collection
        {
            return InstituteCalendar::query()
//                ->whereDate('scheduled_at', '>=', $this->gridStartsAt)
//                ->whereDate('scheduled_at', '<=', $this->gridEndsAt)
                ->get()
                ->map(function (InstituteCalendar $model) {
                    return [
                        'id' => $model->id,
                        'title' => $model->title,
                        'description' => $model->short_description,
                        'date' => $model->event_date,
                    ];
                });
//            return collect([
//                               [
//                                   'id'          => 1,
//                                   'title'       => 'Breakfast',
//                                   'description' => 'Pancakes! 🥞',
//                                   'date'        => Carbon::today(),
//                               ],
//                               [
//                                   'id'          => 1,
//                                   'title'       => 'Breakfast',
//                                   'description' => 'Pancakes! 🥞',
//                                   'date'        => Carbon::today(),
//                               ],
//                               [
//                                   'id'          => 1,
//                                   'title'       => 'Breakfast',
//                                   'description' => 'Pancakes! 🥞',
//                                   'date'        => Carbon::today(),
//                               ],
//                               [
//                                   'id'          => 2,
//                                   'title'       => 'Meeting with Pamela',
//                                   'description' => 'Work stuff',
//                                   'date'        => Carbon::tomorrow(),
//                               ],
//                               [
//                                   'id'          => 3,
//                                   'title'       => 'Meeting with Pamela',
//                                   'description' => 'Work stuff',
//                                   'date'        => Carbon::yesterday(),
//                               ],
//                           ]);
        }

    }
