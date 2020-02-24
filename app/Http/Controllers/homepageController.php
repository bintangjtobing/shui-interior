<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\itemModel;

class homepageController extends Controller
{
    public function index()
    {
        $kategoriProduk = DB::table('produk')
            ->select('produk.*')
            ->orderBy('produk.created_at', 'DESC')
            ->limit(8)
            ->get();
        return view('homepage.home', ['kategoriProduk' => $kategoriProduk]);
    }
    public function shop1($produk_id)
    {
        $kategoriProduk = DB::table('produk')
            ->select('produk.*')
            ->orderBy('produk.created_at', 'DESC')
            ->get();
        $itemkategori = DB::table('items')
            ->where('items.type_product', '=', $produk_id)
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->join('produk', 'produk.produk_id', '=', 'items.type_product')
            ->select('items.*', 'categoriesSparepart.*', 'produk.*')
            ->paginate(9);
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.shop1', ['kategori' => $kategori, 'itemkategori' => $itemkategori, 'kategoriProduk' => $kategoriProduk]);
    }
    public function viewcategory($id)
    {
        $kategoriProduk = DB::table('produk')
            ->select('produk.*')
            ->orderBy('produk.created_at', 'DESC')
            ->get();
        $itemkategori = DB::table('items')
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->where('items.kategori_id', '=', $id)
            ->select('items.*', 'categoriesSparepart.*')
            ->paginate(9);
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.category', ['kategori' => $kategori, 'itemkategori' => $itemkategori, 'kategoriProduk' => $kategoriProduk]);
        // dd($itemkategori);
    }
    public function quickview($itemId)
    {
        $kategoriProduk = DB::table('produk')
            ->select('produk.*')
            ->orderBy('produk.created_at', 'DESC')
            ->get();
        $item = itemModel::find($itemId);
        $itemkategori = DB::table('items')
            ->where('items.itemId', '=', $itemId)
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->select('items.*', 'categoriesSparepart.*')
            ->get();
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.viewitem', ['item' => $item, 'itemkategori' => $itemkategori, 'kategori' => $kategori, 'kategoriProduk' => $kategoriProduk]);
    }
    public function penawaran($itemId)
    {
        $kategoriProduk = DB::table('produk')
            ->select('produk.*')
            ->orderBy('produk.created_at', 'DESC')
            ->get();
        $item = itemModel::find($itemId);
        $itemkategori = DB::table('items')
            ->where('items.itemId', '=', $itemId)
            ->join('categoriesSparepart', 'categoriesSparepart.id', '=', 'items.kategori_id')
            ->join('produk', 'produk.produk_id', '=', 'items.type_product')
            ->select('items.*', 'categoriesSparepart.*')
            ->get();
        $kategori = DB::table('categoriesSparepart')
            ->select('categoriesSparepart.*')
            ->get();
        return view('homepage.penawaran', ['item' => $item, 'itemkategori' => $itemkategori, 'kategori' => $kategori, 'kategoriProduk' => $kategoriProduk]);
    }

    public function kirimpenawaran(Request $request)
    {
        $pesan = new \App\MessagesModel;
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->nohp = $request->nohp;
        $pesan->subject = 'Saya tertarik dengan produk ' . $request->subject;
        $pesan->messages = $request->notes;
        $pesan->logIP = $request->getClientIp();
        $pesan->status = 'unread';

        $pesan->save();
        return redirect('/')->with('sukses', 'Penawaran kamu berhasil kami terima. Kami akan menghubungi kamu dalam waktu 1x24 jam. Jika belum menerima email/panggilan telepon, kamu boleh mengirim pesan ke email info@sumberparts.com. Terima kasih.');
    }
    public function kirimpesan(Request $request)
    {
        $pesan = new \App\MessagesModel;
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->nohp = $request->nohp;
        $pesan->subject = $request->subject;
        $pesan->messages = $request->notes;
        $pesan->logIP = $request->getClientIp();
        $pesan->status = 'unread';

        $pesan->save();
        return back()->with('sukses', 'Yes');
    }
    public function about()
    {
        $kategoriProduk = DB::table('produk')
            ->select('produk.*')
            ->orderBy('produk.created_at', 'DESC')
            ->get();
        return view('homepage.about', ['kategoriProduk' => $kategoriProduk]);
    }
    public function contact()
    {
        $kategoriProduk = DB::table('produk')
            ->select('produk.*')
            ->orderBy('produk.created_at', 'DESC')
            ->get();
        return view('homepage.contact', ['kategoriProduk' => $kategoriProduk]);
    }
}
