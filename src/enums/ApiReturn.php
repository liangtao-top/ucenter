<?php
declare(strict_types=1);
// +----------------------------------------------------------------------
// | CodeEngine
// +----------------------------------------------------------------------
// | Copyright 艾邦
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: TaoGe <liangtao.gz@foxmail.com>
// +----------------------------------------------------------------------
// | Version: 2.0 2022/6/20 17:47
// +----------------------------------------------------------------------
namespace top\liangtao\ucenter\enums;

enum ApiReturn: int
{
    case SUCCEED = 1;

    case FAILED = -1;

    case FORBIDDEN = 0;
}
