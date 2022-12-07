<?php

namespace App\Http\Controllers\Posts;

use App\Forms\Components\post\PostForm;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Filament\Resources\Form;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostsController extends Controller
{
    private PostForm $form;

    /**
     * @param PostForm $form
     */
    public function __construct(PostForm $form)
    {
        $this->form = $form;
    }

    public function index(): Factory|View|Application
    {
        return view('site.posts.index', [
            'posts' => Post::with(['user'])->whereStatus('ACCEPTED')->paginate(6)
        ]);

    }

    public function travels(): Factory|View|Application
    {
        return view('site.posts.travel.create', [
            'post' => new Post()
        ]);

    }

    public function coli(): Factory|View|Application
    {
        return view('site.posts.coli.create', [
            'post' => new Post()
        ]);

    }
}
