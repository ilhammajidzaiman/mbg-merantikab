<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $data['galery'] = [
            (object) [
                'file' => asset('kindergarten-student-bro.svg'),
                'description' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum suscipit molestiae quisquam!',
            ],
            (object) [
                'file' => asset('children-bro.svg'),
                'description' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor ea omnis qui quisquam!',
            ],
            (object) [
                'file' => asset('motherhood-bro.svg'),
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            ],
            (object) [
                'file' => asset('children-bro.svg'),
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis.',
            ],
            (object) [
                'file' => asset('motherhood-bro.svg'),
                'description' => 'Lorem ipsum dolor sit amet consectetur.',
            ],
            (object) [
                'file' => asset('children-bro.svg'),
                'description' =>
                'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis voluptate nostrum, adipisci exercitationem itaque ipsa magni.',
            ],
            (object) [
                'file' => asset('motherhood-bro.svg'),
                'description' =>
                'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore amet quisquam deserunt vitae odio obcaecati, atque deleniti numquam saepe.',
            ],
            (object) [
                'file' => asset('kindergarten-student-bro.svg'),
                'description' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error exercitationem deleniti veritatis doloremque, molestiae repellendus at quis, nemo nesciunt quos vitae, quasi fugit. Voluptate animi quam aliquam?',
            ],
            (object) ['file' => asset('motherhood-bro.svg'), 'description' => 'Lorem, ipsum dolor.'],
        ];
        return view('pages.galery.index', $data);
    }

    public function show(string $id)
    {
        //
    }
}
