<?php
namespace App\Http\Controllers\Api;
use App\Models\Post;
use Orion\Http\Controllers\Controller;

class PostsController extends Controller {
    protected $model = Post::class;
    
    public function searchableBy(): array {
        return ['title','body','category'];
    }

    public function filterableBy(): array {
        return ['title','body','create_at','updated_at','published','id'];
    }

    public function sortableBy(): array {
        return ['title','category'];
    }

    public function exposedScopes(): array {
        return ['published','whereCategory'];
    }
}