<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data['article'] = [
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
        // $data['article'] = Article::withOnly(['tags', 'category'])
        //     ->latest()
        //     ->take(9)
        //     ->get();
        return view('pages.article.index', $data);
    }

    public function show(string $id)
    {
        // $data['record'] = Article::show()
        //     ->withOnly(['tags', 'category'])
        //     ->where('slug', $id)
        //     ->first();
        // return view('pages.article', $data);

        $data['record'] =
            (object) [
                'title' => 'Informasi Publik',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, nam. Libero quas qui minima.',
                'content' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam dolorum doloremque
                            blanditiis magnam maiores eum iste id rerum, esse corrupti natus laborum sequi non
                            recusandae itaque, aliquid quam cupiditate illo est maxime necessitatibus molestias modi
                            tenetur hic! Magni delectus reprehenderit dignissimos neque earum? Et quasi nemo iste
                            tenetur ipsum repellendus perferendis nulla molestias temporibus nihil repudiandae officia
                            cum, expedita vitae. Consequatur et quasi quas, veritatis, magnam tempore eaque iste omnis
                            eius nobis assumenda illo nam quae unde laborum corrupti, possimus aliquam. Dolor nostrum
                            vitae atque inventore impedit fugiat, eum nisi explicabo provident, ex ad sit deserunt
                            ducimus nulla officiis. Necessitatibus suscipit temporibus corporis quidem facere quos
                            placeat cumque recusandae soluta itaque ipsam ad dolor consequatur nulla veniam tenetur, sit
                            eaque reprehenderit porro atque minima nihil? Praesentium velit aut provident laboriosam,
                            labore quidem ullam minima assumenda! Consequuntur nemo qui tenetur totam eligendi nesciunt
                            illo harum omnis modi exercitationem eaque dicta, aut reiciendis quibusdam molestiae. Fugit
                            aliquid quaerat qui dolore asperiores ad, id accusamus, libero commodi odit enim adipisci
                            corporis tempore nihil aut error reprehenderit eaque in ut nisi animi rem nostrum cum sit!
                            Quisquam labore laudantium ipsum, alias qui mollitia inventore tempora odit porro,
                            consectetur recusandae delectus dolorem facere soluta? Distinctio.
                        </p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit eaque dolorum voluptas quo
                            provident sapiente natus explicabo, aperiam necessitatibus molestias deleniti, qui sint, eos
                            quibusdam omnis odio doloribus nemo. Totam dicta eum nihil fugiat molestiae quae vel omnis
                            dignissimos, sit impedit ducimus perspiciatis blanditiis voluptatem eos tenetur. Aliquid,
                            delectus! Labore libero cupiditate, dolore quae dignissimos nemo nam, tenetur temporibus
                            eligendi, fuga totam sapiente dolorem laborum nihil maxime repellendus sequi molestias
                            quibusdam asperiores unde sint harum delectus ea? Rem porro facere optio laboriosam atque
                            esse ab sed neque recusandae nam a dicta iure, tenetur consectetur nulla numquam velit
                            explicabo, ea similique!
                        </p>',
                'category' =>
                (object) [
                    'title' => 'mbg',
                ],
            ];
        return view('pages.article.show', $data);
    }
}
