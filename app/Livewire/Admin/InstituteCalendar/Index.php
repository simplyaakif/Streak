<?php

    namespace App\Livewire\Admin\InstituteCalendar;

    use App\Models\InstituteCalendar;
    use Asantibanez\LivewireCalendar\LivewireCalendar;
    use Carbon\Carbon;
    use Illuminate\Support\Collection;
    use Monolog\Handler\InsightOpsHandler;

    class Index extends LivewireCalendar {

        public $showModal = false;
        public $viewModal = false;
        public $editModal = false;
        public $originalEvent = false;
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

        public function show($eventId)
        {
            $this->viewModal = true;
            $this->event     = InstituteCalendar::find($eventId)->toArray();
        }

        public function edit($eventId)
        {

            $this->originalEvent = InstituteCalendar::find($eventId)->toArray();
            $this->event         = InstituteCalendar::find($eventId)->toArray();
            $this->showModal     = true;
        }

        public function delete($eventId)
        {
            $event = InstituteCalendar::find($eventId);
            $event->delete();
            $this->redirectRoute('admin.system-calendars.index');

        }

        public function submit()
        {

            if($this->originalEvent) {
                InstituteCalendar::updateOrCreate($this->originalEvent, $this->event);
            } else {
                InstituteCalendar::create($this->event);
            }
            $this->event     = [
                'title'             => '',
                'short_description' => '',
                'long_description'  => '',
                'event_date'        => '',
            ];
            $this->showModal = false;
            $this->redirectRoute('admin.system-calendars.index');
        }
//        public function onDayClick($year, $month, $day)
//        {
//            dd($year,$month,$day);
//        }

        public function onEventClick($eventId)
        {
            // This event is triggered when an event card is clicked
            // You will be given the event id that was clicked
            $event = InstituteCalendar::find($eventId);
            dd($event);
            $this->event     = $event->toArray();
            $this->showModal = true;
        }

//        public function onEventDropped($eventId, $year, $month, $day)
//        {
//            // This event will fire when an event is dragged and dropped into another calendar day
//            // You will get the event id, year, month and day where it was dragged to
//        }

        public function events(): Collection
        {
            return InstituteCalendar::query()
//                ->whereDate('scheduled_at', '>=', $this->gridStartsAt)
//                ->whereDate('scheduled_at', '<=', $this->gridEndsAt)
                ->get()->map(function (InstituteCalendar $model) {
                    return [
                        'id'          => $model->id,
                        'title'       => $model->title,
                        'description' => $model->short_description,
                        'date'        => $model->event_date,
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
