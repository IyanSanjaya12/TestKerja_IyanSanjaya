<?php

use Illuminate\Database\Seeder;
use App\barangModel;

class barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$jml=barangModel::all()->count();
    	if($jml>0){
    		barangModel::where('kode_barang','1')
    		->orwhere('kode_barang','2')
    		->orwhere('kode_barang','3')
    		->orwhere('kode_barang','4')
    		->delete();
    		barangModel::insert([
    			[
    				'kode_barang'=>'1',
    				'nama'=>'Lemari',
    				'deskripsi'=>'Lemari kayu berwarna Coklat, terbuat dari kayu Jati',
    				'harga'=>'500000'
    			],
    			[
    				'kode_barang'=>'2',
    				'nama'=>'Kursi',
    				'deskripsi'=>'Kursi kayu berwarna Coklat, terbuat dari kayu Jati',
    				'harga'=>'200000'
    			],
    			[
    				'kode_barang'=>'3',
    				'nama'=>'Meja',
    				'deskripsi'=>'Meja kayu berwarna Coklat, terbuat dari kayu Jati',
    				'harga'=>'500000'
    			],
    			[
    				'kode_barang'=>'4',
    				'nama'=>'Sofa',
    				'deskripsi'=>'Sofa berwarna Merah, terbuat dari kain planel',
    				'harga'=>'500000'
    			]

    		]);
    	}else{
    		barangModel::insert([
    			[
    				'kode_barang'=>'1',
    				'nama'=>'Lemari',
    				'deskripsi'=>'Lemari kayu berwarna Coklat, terbuat dari kayu Jati',
    				'harga'=>'500000'
    			],
    			[
    				'kode_barang'=>'2',
    				'nama'=>'Kursi',
    				'deskripsi'=>'Kursi kayu berwarna Coklat, terbuat dari kayu Jati',
    				'harga'=>'200000'
    			],
    			[
    				'kode_barang'=>'3',
    				'nama'=>'Meja',
    				'deskripsi'=>'Meja kayu berwarna Coklat, terbuat dari kayu Jati',
    				'harga'=>'500000'
    			],
    			[
    				'kode_barang'=>'4',
    				'nama'=>'Sofa',
    				'deskripsi'=>'Sofa berwarna Merah, terbuat dari kain planel',
    				'harga'=>'500000'
    			]
    		]);
    	}
    }
}
