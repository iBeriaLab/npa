<?php

namespace App\Http\Controllers;
use JWTAuth;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function post(Request $request){
        if(! $user = JWTAuth::parseToken()->authenticate()){
            return response()->json(['message' => 'User not found'], 404);
        }

        $user = JWTAuth::parseToken()->toUser();

        $post = new Posts();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->code = $request->input('category');
        $post->image = $request->input('image');
        $post->slug = $request->input('slug');
        $post->like = $request->input('like');
        $post->dislike = $request->input('dislike');
        $post->author = $request->input('author');
        $post->views = $request->input('views');
        $post->save();
        return response()->json(['post' => $post,'user' => $user], 201);
    }

    public function get(){
        $posts = Posts::all();
        $response = [
            'posts' => $posts
        ];
        return response()->json($response, 200);
    }

    public function put(Request $request, $id){
        $post = Posts::find($id);
        if(!$post){
            return response()->json(['message' => 'Country not found'], 404);
        }
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->code = $request->input('category');
        $post->image = $request->input('image');
        $post->slug = $request->input('slug');
        $post->like = $request->input('like');
        $post->dislike = $request->input('dislike');
        $post->author = $request->input('author');
        $post->views = $request->input('views');
        $post->save();
        return response()->json(['post' => $post], 200);
    }

    public function delete($id){
        $post = Posts::find($id);
        $post->delete();
        return response()->json(['message' => 'Country Deleted'], 200);
    }

    public function getPosts()
    {
        #input url
        $url = 'http://gaagrdzele.com/api/app/posts';
        $posts = file_get_contents($url);

        //$cityurl = 'http://country.io/capital.json';

        //$capitals = file_get_contents($cityurl);

        return view('app.posts.index', ['posts' => json_decode($posts, true)]);
    }


    /**
     * @param $capitalname
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCityWeather($capitalname){

        $url = "https://api.apixu.com/v1/forecast.json?key=84ffda9466d14102837150237172507&q=" .  $capitalname;

        $weather = json_decode(file_get_contents($url), true);

        return view('app.countries.wheater', ['weather' => $weather]);
        //dd($weather);
    }


}
