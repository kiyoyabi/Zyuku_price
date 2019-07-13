<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyougakuController extends Controller
{
    public $courses = [];
    public function course1(Request $request)
    {
        // フォームの値をリクエストで受け取る
        $course1 = $request->input('course');

        // フォームデータを渡してリダイレクトする
        return view('syougakus.course1')->with('course1', $course1);
    }

    public function cal(Request $request)
    {
        // コースとコマ数に応じた料金を配列に格納
        $koma = $request->input('koma');

        if($request->input('速読')){
            if($request->input('速読解')){
            //  速読解の料金（コマ数ごと）
            switch($koma){
                case 1:
                $price[] = 3320;
                break;
                case 2:
                $price[] = 6341;
                break;
                case 3:
                $price[] = 9064;
                break;
                case 4:
                $price[] = 11487;
                break;
                case 5:
                $price[] = 13612;
                break;
                case 6:
                $price[] = 15438;
                break;
            }

            if($request->input('スポーツ')){
            // 速読スポーツの料金（コマ数ごと）
            switch($koma){
                case 1:
                $price[] = 3500;
                break;
                case 2:
                $price[] = 6685;
                break;
                case 3:
                $price[] = 9555;
                break;
                case 4:
                $price[] = 12110;
                break;
                case 5:
                $price[] = 14350;
                break;
                case 6:
                $price[] = 16275;
                break;
            }
        }

        if($request->input('中学受験')){
            // 中学受験の料金（コマ数ごと）
            switch($koma){
                case 1:
                $price[] = 6640;
                break;
                case 2:
                $price[] = 12616;
                break;
                case 3:
                $price[] = 17928;
                break;
                case 4:
                $price[] = 22576;
                break;
                case 5:
                $price[] = 26560;
                break;
                case 6:
                $price[] = 29880;
                break;
            }
        }

        if($request->input('漢検')){
            // 漢検料金
            switch($koma){
                case 1:
                $price[] = 2800;
                break;
                case 2:
                $price[] = 5348;
                break;
                case 3:
                $price[] = 7644;
                break;
                case 4:
                $price[] = 9688;
                break;
                case 5:
                $price[] = 11480;
                break;
                case 6:
                $price[] = 13020;
                break;
            }
        }

        if($request->input('数検')){
            // 数検料金
            switch($koma){
                case 1:
                $price[] = 4500;
                break;
                case 2:
                $price[] = 8550;
                break;
                case 3:
                $price[] = 12150;
                break;
                case 4:
                $price[] = 15300;
                break;
                case 5:
                $price[] = 18000;
                break;
                case 6:
                $price[] = 20250;
                break;
            }
        }

        if($request->input('英検')){
            // 英検5級料金
            switch($koma){
                case 1:
                $price[] = 5800;
                break;
                case 2:
                $price[] = 11020;
                break;
                case 3:
                $price[] = 15660;
                break;
                case 4:
                $price[] = 19720;
                break;
                case 5:
                $price[] = 23200;
                break;
                case 6:
                $price[] = 26100;
                break;
            }
        }

        if($request->input('英検')){
            // 作文・ロジカルトーク30分料金表
            switch($koma){
                case 1:
                $price[] = 4200;
                break;
                case 2:
                $price[] = 7980;
                break;
                case 3:
                $price[] = 11340;
                break;
                case 4:
                $price[] = 14280;
                break;
                case 5:
                $price[] = 16800;
                break;
                case 6:
                $price[] = 18900;
                break;
            }
        }

        if($request->input('英検')){
            switch($koma){
                case 1:
                $price[] = 6800;
                break;
                case 2:
                $price[] = 12920;
                break;
                case 3:
                $price[] = 18360;
                break;
                case 4:
                $price[] = 23120;
                break;
                case 5:
                $price[] = 27200;
                break;
                case 6:
                $price[] = 30600;
                break;
            }
        }
        // コースとコマ数に関する授業料計算
        $zyugyouryou = array_sum($price);
        // 入塾料（初回分）
        $entry_price = 10000;
        // 教材費（年額）
        $workbook_price = 3600;
        // 施設改良費（月額）
        $place_mentenance_price = 500;
        $total_price = $zyugyouryou + $entry_price + $workbook_price + $place_mentenance_price;


        return view('syougakus.cal')->with('total_price', $total_price);
    }
}
