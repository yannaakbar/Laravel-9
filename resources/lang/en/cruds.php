<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Hak Akses',
        'title_singular' => 'Hak Akses',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Dibuat',
            'created_at_helper' => '',
            'updated_at'        => 'Terakhir Diperbaharui',
            'updated_at_helper' => '',
            'deleted_at'        => 'Dihapus',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Hak Akses',
            'permissions_helper' => '',
            'created_at'         => 'Dibuat',
            'created_at_helper'  => '',
            'updated_at'         => 'Terakhir Diperbaharui',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Dihapus',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nama Karyawan',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Verifikasi Email',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Dibuat',
            'created_at_helper'        => '',
            'updated_at'               => 'Terakhir Diperbaharui',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Dihapus',
            'deleted_at_helper'        => '',
            'team'                     => 'Cabang',
            'team_helper'              => '',
        ],
    ],
    'asset'         => [
        'title'          => 'Data Barang',
        'title_singular' => 'Barang',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Nama Barang',
            'name_helper'        => '',
            'description'        => 'Deskripsi',
            'description_helper' => '',
            'satuan'             => 'Satuan',
            'satuan_helper'      => '',
            'created_at'         => 'Dibuat',
            'created_at_helper'  => '',
            'updated_at'         => 'Terakhir Diperbaharui',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Dihapus',
            'deleted_at_helper'  => '',
        ],
    ],
    'team'           => [
        'title'          => 'Kantor Cabang',
        'title_singular' => 'Cabang',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'created_at'        => 'Dibuat',
            'created_at_helper' => '',
            'updated_at'        => 'Terakhir Diperbaharui',
            'updated_at_helper' => '',
            'deleted_at'        => 'Dihapus',
            'deleted_at_helper' => '',
            'name'              => 'Nama Cabang',
            'name_helper'       => '',
            'kontak'            => 'Kontak',
            'kontak_helper'     => '',
            'alamat'            => 'Alamat',
            'alamat_helper'     => '',
        ],
    ],
    'stock'          => [
        'title'          => 'Stok Barang',
        'title_singular' => 'Stok Barang',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => '',
            'asset'                => 'Nama Barang',
            'asset_helper'         => '',
            'harga'                => 'Harga',
            'harga_helper'         => '',
            'satuan'                => 'Satuan',
            'satuan_helper'         => '',
            'current_stock'        => 'Stok Saat Ini',
            'current_stock_helper' => '',
            'created_at'           => 'Dibuat',
            'created_at_helper'    => '',
            'updated_at'           => 'Terakhir Diperbaharui',
            'updated_at_helper'    => '',
            'deleted_at'           => 'Dihapus',
            'deleted_at_helper'    => '',
            'team'                 => 'Kantor Cabang',
            'team_helper'          => '',
        ],
    ],
    'transaction'    => [
        'title'          => 'Keluar Masuk Barang',
        'title_singular' => 'Keluar Masuk Barang',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'asset'             => 'Nama Barang',
            'asset_helper'      => '',
            'stock'             => 'Stok',
            'stock_helper'      => '',
            'created_at'        => 'Dibuat',
            'created_at_helper' => '',
            'updated_at'        => 'Terakhir Diperbaharui',
            'updated_at_helper' => '',
            'deleted_at'        => 'Dihapus',
            'deleted_at_helper' => '',
            'team'              => 'Cabang',
            'team_helper'       => '',
            'user'              => 'Nama Karyawan',
            'user_helper'       => '',
        ],
    ],
];