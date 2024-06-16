<?php

namespace App\Helper\Enum;
use App\Base\Enum;

class Role extends Enum{
    const CANDIDATE = 0;
    const COMPANY = 1;
    const ADMIN = 3;

    const LABELS = [
      self::CANDIDATE => 'Ứng viên',
      self::COMPANY => 'Nhà tuyển dụng',
      self::ADMIN => 'Quản trị viên'
    ];

}
