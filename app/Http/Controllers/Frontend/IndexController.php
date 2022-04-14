<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Artikel;
use App\Models\Events;
use App\Models\Footer;
use App\Models\ImageSlider;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\KategoriArtikel;
use App\Models\Kegiatan;
use App\Models\ProfileSekolah;
use App\Models\User;
use App\Models\Video;
use App\Models\Visimisi;

class IndexController extends Controller
{
    //Welcome
    public function index()
    {
        // Menu
        $jurusanM = Jurusan::where('is_active','0')->get();
        $kegiatanM = Kegiatan::where('is_active','0')->get();

        // Gambar Slider
        $slider = ImageSlider::where('is_Active','0')->get();

        // About
        $about = About::where('is_Active','0')->first();

        // Video
        $video = Video::where('is_active','0')->first();

        // Pengajar
        $pengajar = User::with('userDetail')->where('status','Aktif')->where('role','Guru')->get();

        //Artikel
        $artikel = Artikel::where('is_active','0')->orderBy('created_at','desc')->get();

        // Event
        $event = Events::where('is_active','0')->orderBy('created_at','desc')->get();

        // Footer
        $footer = Footer::first();

        return view('frontend.welcome', compact('jurusanM','kegiatanM','slider','about','video','pengajar','artikel','event','footer'));
    }

    // Artikel
    public function artikel()
    {
         // Menu
         $jurusanM = Jurusan::where('is_active','0')->get();
         $kegiatanM = Kegiatan::where('is_active','0')->get();

         // Footer
        $footer = Footer::first();
 
         // Kategori
         $kategori = KategoriArtikel::where('is_active','0')->orderBy('created_at','desc')->get();
         
         //Artikel
         $artikel = Artikel::where('is_active','0')->orderBy('created_at','desc')->paginate(10);
 
         return view('frontend.content.artikelAll', compact('artikel','kategori','jurusanM','kegiatanM','footer'));
    }
    // Show Detail Artikel
    public function detailArtikel($slug)
    {
        // Menu
        $jurusanM = Jurusan::where('is_active','0')->get();
        $kegiatanM = Kegiatan::where('is_active','0')->get();

        // Footer
        $footer = Footer::first();

        // Kategori
        $kategori = KategoriArtikel::where('is_active','0')->orderBy('created_at','desc')->get();
        
        //Artikel
        $artikelOther = Artikel::where('is_active','0')->orderBy('created_at','desc')->get();

        $artikel = Artikel::where('slug',$slug)->first();
        return view('frontend.content.showArtikel', compact('artikel','kategori','artikelOther','jurusanM','kegiatanM','footer'));
    }


    // Events
    public function events()
    {
         // Menu
         $jurusanM = Jurusan::where('is_active','0')->get();
         $kegiatanM = Kegiatan::where('is_active','0')->get();

         // Footer
        $footer = Footer::first();
 
         //Artikel
         $artikel = Artikel::where('is_active','0')->orderBy('created_at','desc')->get();
 
         $event = Events::where('is_active','0')->orderBy('created_at','desc')->get();
         return view('frontend.content.event.eventAll', compact('event','artikel','jurusanM','kegiatanM','footer'));
    }


    // Detail Event
    public function detailEvent($slug)
    {
        // Menu
        $jurusanM = Jurusan::where('is_active','0')->get();
        $kegiatanM = Kegiatan::where('is_active','0')->get();

         // Footer
        $footer = Footer::first();
 
         //Artikel
         $artikel = Artikel::where('is_active','0')->orderBy('created_at','desc')->get();
 
         $event = Events::where('slug',$slug)->first();
         $eventOther = Events::where('is_active','0')->orderBy('created_at','desc')->get();

         return view('frontend.content.event.detailEvent', compact('event','eventOther','artikel','jurusanM','kegiatanM','footer'));
    }

    // Profile Sekolah
    public function profileNastra()
    {
        $jurusanM = Jurusan::where('is_active','0')->get();
        $kegiatanM = Kegiatan::where('is_active','0')->get();

        // Pengajar
        $pengajar = User::with('userDetail')->where('status','Aktif')->where('role','Guru')->get();

        // Footer
        $footer = Footer::first();

        $profile = ProfileSekolah::first();
        return view('frontend.content.profileNastra', compact('profile','jurusanM','kegiatanM','pengajar','footer'));
    }

    // Visi dan Misi
    public function visimisi()
    {
        $jurusanM = Jurusan::where('is_active','0')->get();
        $kegiatanM = Kegiatan::where('is_active','0')->get();

        // Pengajar
        $pengajar = User::with('userDetail')->where('status','Aktif')->where('role','Guru')->get();

        // Footer
        $footer = Footer::first();

        $visimisi = Visimisi::first();
        return view('frontend.content.visimisi', compact('visimisi','jurusanM','kegiatanM','pengajar','footer'));
    }

}
