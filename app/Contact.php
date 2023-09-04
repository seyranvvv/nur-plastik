<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [
        'id',
    ];
    public $timestamps = false;
    public function getName()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->adress_tm;
                break;
            case 'ru':
                return $this->adress_ru ?: $this->adress_tm;
                break;
            case 'en':
                return $this->adress_en ?: $this->adress_tm;
                break;
            default:
                return $this->adress_tm;
        }
    }
    public function getBody()
    {
        $locale = app()->getLocale();
        switch ($locale) {
            case 'tm':
                return $this->name_tm;
                break;
            case 'ru':
                return $this->name_ru ?: $this->name_tm;
                break;
            case 'en':
                return $this->name_en ?: $this->name_tm;
                break;
            default:
                return $this->name_tm;
        }
    }
}
