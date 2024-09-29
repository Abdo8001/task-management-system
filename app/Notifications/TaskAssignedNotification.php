<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Task;

class TaskAssignedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $task;

    /**
     * Create a new notification instance.
     *
     * @param Task $task
     * @return void
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Task Assigned: ' . $this->task->title)
                    ->greeting('Hello ' . $notifiable->name . ',')
                    ->line('A new task has been assigned to you.')
                    ->action('View Task', url('/tasks/' . $this->task->id))
                    ->line('Task Title: ' . $this->task->title)
                    ->line('Thank you for using our task management system!');
    }

    /**
     * Get the array representation of the notification for database storage.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'task_id' => $this->task->id,
            'task_title' => $this->task->title,
            'assigned_by' => auth()->user()->name,
            'message' => 'You have been assigned a new task: ' . $this->task->title,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'task_id' => $this->task->id,
            'task_title' => $this->task->title,
            'assigned_by' => auth()->user()->name,
        ];
    }
}
