<?php

    namespace App\Events;

    use Illuminate\Broadcasting\InteractsWithSockets;
    use Illuminate\Broadcasting\Channel;
    use Illuminate\Broadcasting\PresenceChannel;
    use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
    use Illuminate\Foundation\Events\Dispatchable;
    use Illuminate\Queue\SerializesModels;

    class OnlineClassStartNotificationEvent implements ShouldBroadcast {

        use Dispatchable, InteractsWithSockets, SerializesModels;

        public $batch;
        public $classOptions;
        public function __construct($batch,$classOptions)
        {
            $this->batch = $batch;
            $this->classOptions = $classOptions;
        }

        public function broadcastOn()
        {
            return ['online-class-start-notification'];
        }


    }
