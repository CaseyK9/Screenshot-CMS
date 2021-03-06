<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrawlStatus extends Model
{
    protected $table = 'crawl_status';

    protected $fillable = [
        'platform', 'screenshot_id'
    ];

    public function screenshot()
    {
        $this->belongsTo('App\Models\Screenshot');
    }
}
