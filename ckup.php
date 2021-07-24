
        $posts = DB::table('posts')->get();
 
        // mengirim data pegawai ke view index
        return view('user.story',['posts' => $posts]);