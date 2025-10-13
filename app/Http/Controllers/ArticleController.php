<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
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
        return view('pages.article', $data);
    }
}
