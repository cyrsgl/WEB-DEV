<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $posts = [
        [
            'id' => 1,
            'title' => 'WHAT IS YOLO',
            'author' => 'Cyris Gale Urbano',
            'category' => 'Lifestyle',
            'content' => 'YOLO stands for "You Only Live Once." It reminds us to embrace adventures, try new experiences, and live fully without regrets.',
            'created_at' => '2025-11-01',
        ],
        [
            'id' => 2,
            'title' => 'SLOWDAYS',
            'author' => 'Cyris Gale Urbano',
            'category' => 'Lifestyle',
            'content' => 'Slow days can be a blessing. They give us time to reflect, recharge, and focus on the small but important things in life.',
            'created_at' => '2025-11-02',
        ],
        [
            'id' => 3,
            'title' => 'WHY I LOVE MILO',
            'author' => 'Cyris Gale Urbano',
            'category' => 'Food',
            'content' => 'Milo has been my comfort drink since childhood. Its rich chocolate flavor and energizing taste always bring warmth and joy.',
            'created_at' => '2025-11-03',
        ],
        [
            'id' => 4,
            'title' => 'The Future of AI in Tourism',
            'author' => 'Cyris Gale Urbano',
            'category' => 'Technology',
            'content' => 'Artificial Intelligence is reshaping tourism by providing smart travel recommendations, predictive planning, and personalized experiences for every traveler.',
            'created_at' => '2025-11-04',
        ],
        [
            'id' => 5,
            'title' => 'Sustainability in Local Travel',
            'author' => 'Cyris Gale Urbano',
            'category' => 'Travel',
            'content' => 'Supporting local eco-tourism is vital. Sustainable travel practices help preserve nature, empower communities, and ensure future generations can enjoy local destinations.',
            'created_at' => '2025-11-05',
        ],
    ];

    public function index()
    {
        $posts = $this->posts;
        return view('blog.index', compact('posts'));
    }

    public function show($id)
    {
        $post = collect($this->posts)->firstWhere('id', $id);

        if (!$post) {
            abort(404, 'Post not found.');
        }

        return view('blog.show', compact('post'));
    }

    public function filterByCategory($category)
    {
        $posts = collect($this->posts)->where('category', $category)->values()->all();

        return view('blog.category', [
            'category' => $category,
            'posts' => $posts,
        ]);
    }

    public function about()
    {
        return view('blog.about');
    }
}
