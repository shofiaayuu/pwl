<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "<h2> Selamat Datang </h2> <br> 
                Menampilkan Contact Us <br>
                <a href='https://www.educastudio.com/contact-us'>Contact Us</a>
                ";

    }

    public function about()
    {
        return 'NAMA : SHOFIATUL AYU ANIKANINGRUM 
        <br> 
        NIM : 2141720048  '
        ; 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Halaman Artikel dengan ID '. $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function product()
    {
        
        echo " <h4>Tampilan Product <br></h4>
        <ul>
            <li>
                <a href='https://www.educastudio.com/category/marbel-edu-games'>Product 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>Product 2</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/riri-story-books '>Product 3</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/kolak-kids-songs'>Product 4</a>
            </li>
        </ul>

        ";

    }

    public function news()
    {
        echo "<h3>Menampilkan Daftar Berita <br></h3>
            <ul>
                <li>
                    <a href='https://www.educastudio.com/news '>Berita 1</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'>Berita 2</a>
                </li>
            </ul>   
        ";
    }

    public function program()
    {
        echo "<h3>Menampilkan Daftar Program <br></h3>
        <ul>
            <li>
                <a href='https://www.educastudio.com/program/karir '>Program 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/program/magang '>Program 2</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/program/kunjungan-industri  '>Program 3</a>
            </li>
        </ul>
        
        
        ";
    }
    public function aboutUs()
    {
        echo "<h3>Menampilkan About Us <br></h3>
            <a href='https://www.educastudio.com/about-us'>AboutUs</a>
        ";
    }

    
}
