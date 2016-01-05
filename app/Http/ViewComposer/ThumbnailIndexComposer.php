<?php namespace App\Http\ViewComposers;
 
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Modules\Media\Repositories\FileRepository;

 
class ThumbnailIndexComposer 
{
    
    protected $file;

    public function __construct(FileRepository $file)
    {
        $this->file = $file;
    }

    public function compose(View $view)
    {
        $view->with('file', $this->file);
    }
 
}