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
        $data['berita'] = [
            (object) [
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing.',
                'slug' => trim(Str::slug('Lorem ipsum dolor sit amet, consectetur adipisicing.')),
                'file' => asset('kindergarten-student-bro.svg'),
            ],
            (object) [
                'title' => 'Lorem ipsum dolor sit.',
                'slug' => trim(Str::slug('Lorem ipsum dolor sit.')),
                'file' => asset('children-bro.svg'),
            ],
            (object) [
                'title' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptatem assumenda quaerat quia.',
                'slug' => trim(
                    Str::slug(
                        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptatem assumenda quaerat quia.',
                    ),
                ),
                'file' => asset('motherhood-bro.svg'),
            ],
            (object) [
                'title' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis veritatis atque iste odio dignissimos earum labore.',
                'slug' => trim(
                    Str::slug(
                        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis veritatis atque iste odio dignissimos earum labore.',
                    ),
                ),
                'file' => asset('children-bro.svg'),
            ],
            (object) [
                'title' =>
                'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis sit commodi laudantium praesentium odit totam reprehenderit cumque! Quo, necessitatibus!',
                'slug' => trim(
                    Str::slug(
                        'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis sit commodi laudantium praesentium odit totam reprehenderit cumque! Quo, necessitatibus!',
                    ),
                ),
                'file' => asset('motherhood-bro.svg'),
            ],
            (object) [
                'title' =>
                'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, deserunt optio alias ipsa iste corrupti?',
                'slug' => trim(
                    Str::slug(
                        'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, deserunt optio alias ipsa iste corrupti?',
                    ),
                ),
                'file' => asset('children-bro.svg'),
            ],
            (object) [
                'title' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid provident cumque enim repellat a temporibus corrupti recusandae velit ipsum culpa.',
                'slug' => trim(
                    Str::slug(
                        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid provident cumque enim repellat a temporibus corrupti recusandae velit ipsum culpa.',
                    ),
                ),
                'file' => asset('motherhood-bro.svg'),
            ],
            (object) [
                'title' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore excepturi commodi explicabo quas. Eos harum adipisci illum eaque.',
                'slug' => trim(
                    Str::slug(
                        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore excepturi commodi explicabo quas. Eos harum adipisci illum eaque.',
                    ),
                ),
                'file' => asset('kindergarten-student-bro.svg'),
            ],
            (object) [
                'title' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptas debitis eum.',
                'slug' => trim(
                    Str::slug(
                        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptas debitis eum.',
                    ),
                ),
                'file' => asset('motherhood-bro.svg'),
            ],
        ];
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
