<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'nama_acara', 
        'deskripsi', 
        'tanggal_waktu', 
        'lokasi',
        'harga_tiket',
        'kuota_tiket',
        'gambar_acara'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function eventCategories()
    {
        return $this->belongsToMany(Category::class, 'event_categories');
    }
}
