public function index()
{
$posts = BlogPost::with(['user', 'category'])->get();

return $posts;
}
