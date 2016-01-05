<?php namespace App\Http\ViewComposers;
 
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;
use Modules\Blog\Repositories\PostRepository;
use Modules\Media\Repositories\FileRepository;

 
class NewsHomeComposer 
{
    
    protected $file;

    public function __construct(FileRepository $file, PostRepository $post)
    {
        $this->file = $file;
        $this->post = $post;
    }

    public function compose(View $view)
    {
        $posts = $this->post->allTranslatedIn(App::getLocale())->take(4);
        $view->with(['file' => $this->file, 'posts' =>$posts]);
    }
 
}