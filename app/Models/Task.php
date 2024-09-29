<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;
    protected $fillable=[
      'title',
    'task_image',
    'project_id',
    'attachment',
    'description',
    'created_by',
    'status'
];

  
  public function user(): BelongsTo
  {
      return $this->belongsTo(User::class, 'user_id', 'id');
  }
  public function assigned(): BelongsTo
  {
      return $this->belongsTo(User::class, 'assigned_to', 'id');
  }
  
 
  public function project(): BelongsTo
  {
      return $this->belongsTo(Project::class, 'project_id', 'id');
  }
  
  public function comments()
{
return $this->hasMany(Comment::class)->whereNull('parent_id');
}
public function assignedUsers()
{
    return $this->belongsToMany(User::class, 'user_task', 'task_id','user_id');
}
  
}
