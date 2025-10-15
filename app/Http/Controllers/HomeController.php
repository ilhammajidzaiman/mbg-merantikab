<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Shortcut;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['carousel'] = Carousel::Active()
            ->latest('updated_at')
            ->take(5)
            ->get();
        $data['shortcut'] = Shortcut::latest('updated_at')
            ->take(20)
            ->get();
        $data['berita'] = Article::latest()
            ->take(9)
            ->get();
        $data['kegiatan'] = Image::latest()
            ->take(9)
            ->get();
        $data['sasaran'] = [
            (object) [
                'title' => 'Peserta Didik',
                'subtitle' => 'SD, SMP, SMA Sederajat, Santri',
                'description' =>
                'Berfokus pada jenjang pendidikan anak usia dini, pendidikan dasar, dan pendidikan menengah di berbagai lingkungan, meliputi pendidikan umum, kejuruan, keagamaan, pendidikan khusus, layanan khusus, serta pesantren.',
                'file' => asset('kindergarten-student-bro.svg'),
            ],
            (object) [
                'title' => 'Anak - Anak',
                'subtitle' => 'Anak usia di Bawah 5 Tahun',
                'description' =>
                'Pemantauan dan dukungan gizi intensif bagi anak-anak dalam usia emas perkembangan mereka..',
                'file' => asset('children-bro.svg'),
            ],
            (object) [
                'title' => 'Ibu Hamil & Menyusui',
                'subtitle' => 'Gizi untuk Ibu Hamil & Menyusui',
                'description' =>
                'Memastikan kesehatan gizi ibu hamil dan menyusui demi kesehatan ibu dan bayi yang optimal hingga mendukung pertumbuhan dan perkembangan bayi mereka.',
                'file' => asset('motherhood-bro.svg'),
            ],
        ];

        return view('pages.home', $data);
    }
}
