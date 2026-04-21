<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function show($id)
    {
        $product = DB::table('san_pham_bhx')
            ->select(
                'id',
                'tieu_de',
                'ten_sp',
                'gia_goc',
                'gia_ban',
                'hinh_anh',
                'don_vi_tinh',
                'trong_luong',
                'khuyen_mai',
                'thuong_hieu',
                'xuat_xu',
                'bao_quan',
                'thanh_phan',
                'mo_ta',
                'danh_muc_id',
                'status'
            )
            ->where('id', $id)
            ->where('status', 1)
            ->first();

        if (!$product) {
            abort(404);
        }

        $categories = DB::table('danh_muc')
            ->orderBy('id', 'asc')
            ->get();

        $relatedProducts = DB::table('san_pham_bhx')
            ->select(
                'id',
                'tieu_de',
                'gia_goc',
                'gia_ban',
                'hinh_anh',
                'don_vi_tinh',
                'khuyen_mai',
                'danh_muc_id'
            )
            ->where('status', 1)
            ->where('danh_muc_id', $product->danh_muc_id)
            ->where('id', '<>', $product->id)
            ->orderBy('noi_bat', 'desc')
            ->orderBy('id', 'asc')
            ->limit(6)
            ->get();

        $activeCategoryId = $product->danh_muc_id;
        $sort = '';

        return view('coop-shop.detail', compact(
            'product',
            'categories',
            'relatedProducts',
            'activeCategoryId',
            'sort'
        ));
    }
}