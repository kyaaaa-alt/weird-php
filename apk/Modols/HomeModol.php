<?php namespace Apk\Modols;

use Kyaaaa\System\DB;

class HomeModol {
    public function get_users_active() {
        $builder = DB::query('users');
        $builder->select('*');
//        $builder->join('INNER','address', 'users.id = address.user_id');
//        $builder->join('LEFT','city', 'users.id = city.user_id');
//        $builder->where('username', 'kyaaaa');
//        $builder->where('status', 1);
//        dd($builder);
        $query = $builder->get();

        return $query;
    }
}