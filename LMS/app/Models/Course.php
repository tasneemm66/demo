<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Course extends Model
{

    use HasFactory;
    protected $table = 'courses';
	public $timestamps = true;
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded =[   

    ];

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    public function module()
    {
        return $this->hasMany(Module::class);
    }
      /**
     * Get the batch that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function coursesCategory(): BelongsTo
    {
        return $this->belongsTo(courses_category::class);
    }
}
