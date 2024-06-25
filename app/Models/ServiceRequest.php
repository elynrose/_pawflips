<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Auth;

class ServiceRequest extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'service_requests';

    protected $dates = [
        'from',
        'to',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'service_id',
        'pet_id',
        'zip_code',
        'from',
        'to',
        'comments',
        'pending',
        'closed',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function getFromAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setFromAttribute($value)
    {
        $this->attributes['from'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getToAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setToAttribute($value)
    {
        $this->attributes['to'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'user_id');
    }


    public function status($status=null, $serviceRequest) {

        $today = \Carbon\Carbon::now()->timezone(Auth::user()->timezone);
        $fromDateTime = \Carbon\Carbon::parse($serviceRequest->from)->timezone(Auth::user()->timezone);
        $toDateTime = \Carbon\Carbon::parse($serviceRequest->to)->timezone(Auth::user()->timezone);
       
        if($serviceRequest->decline == 0 && $serviceRequest->pending == 0 && $fromDateTime > $today) {
            $status = '<p class="badge badge-success">' . _('New') . '</p>';
        } elseif($fromDateTime < $today && $toDateTime > $today && $serviceRequest->decline == 0 && $serviceRequest->closed == 0 && $serviceRequest->pending == 1) {
            $status = '<p class="badge badge-success">' . _('Booked') . '</p>';
        } elseif($toDateTime < $today && $serviceRequest->decline == 0 && $serviceRequest->closed == 0 && $serviceRequest->pending == 0) {
            $status = '<p class="badge badge-danger">' . _('Expired') . '</p>';
        } elseif($fromDateTime <= $today && $toDateTime >= $today && $serviceRequest->decline == 0 && $serviceRequest->closed == 0 && $serviceRequest->pending == 1 ) {
            $status = '<p class="badge badge-info">' . _('Ongoing') . '</p>';
        } elseif($fromDateTime > $today && $serviceRequest->decline == 0 && $serviceRequest->closed == 0 && $serviceRequest->pending == 1) {
            $status = '<p class="badge badge-info">' . _('Upcoming') . '</p>';
        } elseif($serviceRequest->pending==2 && $serviceRequest->decline == 0  && $serviceRequest->to < $today) {
            $status = '<p class="badge badge-warning">' . _('Completed') . '</p>';
        }

        return $status;
}
    
}
