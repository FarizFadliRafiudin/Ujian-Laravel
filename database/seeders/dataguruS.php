<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class dataguruS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataguru')->insert([
            'nip'=>'12100848',
            'namaguru'=>'Egi Nugraha',
            'jk'=>'L',
            'mapel'=>'Web',
            'walikelas'=>'XI RPL 1',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
    
        DB::table('dataguru')->insert([
            'nip'=>'12100849',
            'namaguru'=>'Fahmi Maulana Ibrahim',
            'jk'=>'L',
            'mapel'=>'Olahraga',
            'walikelas'=>'XI RPL 2',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
    
        DB::table('dataguru')->insert([
            'nip'=>'12100850',
            'namaguru'=>'Asep Ramdan',
            'jk'=>'L',
            'mapel'=>'Bisnis',
            'walikelas'=>'XI BDP 3',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
    
        DB::table('dataguru')->insert([
            'nip'=>'12100851',
            'namaguru'=>'Retno Noviandrini',
            'jk'=>'P',
            'mapel'=>'PBO C#',
            'walikelas'=>'X PPLG 1',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
    
        DB::table('dataguru')->insert([
            'nip'=>'12100852',
            'namaguru'=>'Yufa Gina Maryafa',
            'jk'=>'P',
            'mapel'=>'Web',
            'walikelas'=>'XI RPL 4',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
    
    }
}
