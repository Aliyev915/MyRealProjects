<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;
use App\Models\Blog;
use App\Models\BlogImage;
use App\Models\Category;
use App\Models\Courses;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs=Blog::where('id','>',0)->paginate(3);
        return view('blog', [
            'data' => 'Blogs',
            'bio' => Bio::first(),
            'blogs' => $blogs,
            'categories' => Category::all()
        ]);
    }
    public function detail($slug)
    {
        $blog=Blog::all()->firstWhere('slug',$slug);
        return view(
            'blog-detail',
            [
                'data' => 'Blog Details',
                'bio' => Bio::first(),
                'blog' => $blog,
                'categories'=>Category::all(),
                'comments'=>$blog->comments->where('is_verified',true)
            ]
        );
    }
    public function category($id)
    {
        $category=Category::find($id);
        $blogs=$category->blogs;
        return view('category',
        [
            'blogs'=>$blogs,
            'data'=>'Blogs',
            'categories'=>Category::all(),
            'bio'=>Bio::first()
        ]);
    }

    public function search()
    {
        $search=$_GET['search'];
        if(trim($search)=='')
        {
            $blogs=null;
        }
        else
        {
            $blogs=Blog::where('title_'.App::getLocale(),'like','%'.$search.'%')->get()->take(4);
        }
        return view('search',['blogs'=>$blogs]);
    }

    public function blogs()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blogs.create', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_az' => 'required|max:1500',
            'description_az' => 'required|max:1500',
            'title_en' => 'required|max:1500',
            'description_en' => 'required|max:1500',
            'title_ru' => 'required|max:1500',
            'description_ru' => 'required|max:1500',
            'quote_az' => 'required|max:500',
            'quote_en' => 'required|max:500',
            'quote_ru' => 'required|max:500',
            'images.*' => 'required|mimes:svg,png,jpg,jpeg|max:1024'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $category = Category::where('name_az', $request->category)->first();
        $blog = Blog::create([
            'title_az' => $request->title_az,
            'description_az' => $request->description_az,
            'title_en' => $request->title_en,
            'description_en' => $request->description_en,
            'title_ru' => $request->title_ru,
            'description_ru' => $request->description_ru,
            'quote_az' => $request->quote_az,
            'quote_en' => $request->quote_en,
            'quote_ru' => $request->quote_ru,
            'slug' => Str::slug($request->title_en),
            'category_id' => $category->id,
            'user_id'=>Auth::user()->id
        ]);
        if (Blog::where(['slug' => Str::slug($request->title_en)])->count() > 1) {
            $blog->slug = Str::slug($request->title_en) . '-' .$blog->id;
            $blog->save();
        }
        $files = $request->images;
        foreach ($files as $file) {
            $img = rand() . '.' . $file->extension();
            $file->storeAs('public/images/blogs/', $img);
            $blogImg = new BlogImage();
            $blogImg->image = $img;
            $blogImg->blog_id = $blog->id;
            $blogImg->save();
        }


        return redirect('/admin-user/blog');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.edit', ['blog' => $blog, 'categories' => Category::all()]);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title_az' => 'required|max:150',
            'description_az' => 'required|max:1500',
            'quote_az' => 'required|max:500',
            'title_en' => 'required|max:150',
            'description_en' => 'required|max:1500',
            'quote_en' => 'required|max:500',
            'title_ru' => 'required|max:150',
            'description_ru' => 'required|max:1500',
            'quote_ru' => 'required|max:500'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $category = Category::where('name', $request->category)->first();
        $blog = Blog::find($id);
        if ($request->images != null) {
            $images = $blog->images;
            if ($images != null) {
                foreach ($images as $image) {
                    $img = $image['image'];
                    $path = public_path('storage/images/blogs/' . $img);
                    $blog_image = BlogImage::find($image['id']);
                    if (File::exists($path)) {
                        File::delete($path);
                    }
                    $blog_image->delete();
                }
            }
            $files = $request->images;
            foreach ($files as $file) {
                $img = rand() . '.' . $file->extension();
                $file->storeAs('public/images/blogs/', $img);
                $blogImg = new BlogImage();
                $blogImg->image = $img;
                $blogImg->blog_id = $blog->id;
                $blogImg->save();
            }
        }
        $blog->update([
            'title_az' => $request->title_az,
            'description_az' => $request->description_az,
            'title_en' => $request->title_en,
            'description_en' => $request->description_en,
            'title_ru' => $request->title_ru,
            'description_ru' => $request->description_ru,
            'slug' => Str::slug($request->title_en, '-'),
            'quote_az' => $request->quote_az,
            'quote_en' => $request->quote_en,
            'quote_ru' => $request->quote_ru,
            'category_id' => $category->id
        ]);
        $count = 0;
        if (Blog::where(['slug' => Str::slug($request->title)])->count() > 1) {
            $count++;
            $blog->slug = Str::slug($request->title) . '-' . $count;
            $blog->save();
        }
        return redirect('/admin-user/blog')->with('msg', 'Item succesfully updated!');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        return view('admin.blogs.delete', ['blog' => $blog]);
    }
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $images = $blog->images;
        if ($images != null) {
            foreach ($images as $image) {
                $img = $image['image'];
                $path = public_path('storage/images/blogs/' . $img);
                $blog_image = BlogImage::find($image['id']);
                if (File::exists($path)) {
                    File::delete($path);
                }
                $blog_image->delete();
            }
        }
        $blog->delete();
        return redirect('/admin-user/blog');
    }
}
