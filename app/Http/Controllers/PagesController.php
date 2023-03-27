<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home',['teks' => 'SELAMAT DATANG DI HALAMAN HOME']);
    }

    public function product()
    {
        return view('product',
        ['products' => 'Tampilan Product <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/category/marbel-edu-games">Product 1</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Product 2</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/riri-story-books" >Product 3</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/category/kolak-kids-songs">Product 4</a>
            </li>
        </ul>']);

    }

    public function news()
    {
        return view('news',
        ['berita' => 'Menampilkan Daftar Berita <br>
        <ul>
                <li>
                    <a href="https://www.educastudio.com/news ">Berita 1</a>
                </li>
                <li>
                    <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">Berita 2</a>
                </li>
            </ul> ']); 
    }

    public function program()
    {
        return view('program',
        ['programs' => 'Menampilkan Daftar Program <br>
        <ul>
            <li>
                <a href="https://www.educastudio.com/program/karir ">Program 1</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/program/magang ">Program 2</a>
            </li>
            <li>
                <a href="https://www.educastudio.com/program/kunjungan-industri  ">Program 3</a>
            </li>
        </ul>']); 
        
    } 

    public function aboutUs()
    {
        return view('aboutUs',
        ['about' => 'Menampilkan About Us<br>
        <a href="https://www.educastudio.com/about-us">AboutUs</a>
        ']); 
    }

    public function index()
    {
        return view('contactUs',
        ['contact' => 'Menampilkan Contact Us<br>
        <a href="https://www.educastudio.com/contact-us">ContactUs</a>
        ']); 

    }
}
