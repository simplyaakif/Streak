<?php

    namespace App\Http\Livewire\Student\Issue;

    use App\Models\Issue;
    use App\Models\IssueReplies;
    use Auth;
    use Livewire\Component;

    class Create extends Component {

        public $showCreateModal = false;
        public Issue $issue;
        public IssueReplies $reply;

        public function mount()
        {
            $this->issue = Issue::make([]);
            $this->issue->type = 0;
            $this->issue->student_id = Auth::user()->student->id;
            $this->issue->status = 0;
            $this->reply = IssueReplies::make([]);
            $this->reply->user_id = Auth::id();
        }

        public function rules()
        {
            return [
                'issue.title'=>'required',
                'issue.type'=>'nullable',
                'reply.message'=>'required',
            ];
        }
//
//        public function ()
//        {
//
//        }

        public function submit()
        {
//            dd($this->issue);

            $this->validate();
            $this->issue->student_id = Auth::user()->student->id;
            $this->issue->status = 0;
            $issue = $this->issue;
            $issue->save();

            $this->reply->user_id = Auth::id();
            $reply = $this->reply;
            $reply->issue_id = $issue->id;
            $reply->save();

            $this->showCreateModal = false;
        }

        public function render()
        {
            return view('livewire.student.issue.create');
        }
    }
