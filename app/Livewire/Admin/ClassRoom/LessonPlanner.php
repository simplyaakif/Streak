<?php

    namespace App\Livewire\Admin\ClassRoom;

    use App\Models\Lesson;
    use Auth;
    use Livewire\Component;

    class LessonPlanner extends Component {

        public $batch;
        public $lessons;

        public $showModal;

        public Lesson $lesson;

        public function submit()
        {
            $this->validate();
            $this->lesson->save();
            $this->showModal = false;
        }

        public function rules()
        {
            return [
                'lesson.title'             => 'string',
                'lesson.short_description' => 'string',
                'lesson.long_description'  => 'string',
                'lesson.date'              => 'date',
                'lesson.user_id'           => 'int',
                'lesson.batch_id'          => 'int',

            ];
        }

        public function mount()
        {
            $this->lessons = Lesson::with('user')->where('batch_id', $this->batch->id)->latest()->get();
            $this->lesson  = Lesson::make([
                                              'date'     => now()->format('Y-m-d'),
                                              'batch_id' => $this->batch->id,
                                              'user_id'  => Auth::id()
                                          ]);
        }

        public function render()
        {
            return view('livewire.admin.class-room.lesson-planner');
        }
    }
